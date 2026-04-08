package com.example.firebase01;

import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.*;
import com.google.firebase.firestore.*;
import java.util.*;

public class MainActivity extends AppCompatActivity {

    private EditText edtNome, edtCurso;
    private Button btnSalvar;
    private TextView txtLista;

    private FirebaseFirestore db;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        edtNome = findViewById(R.id.edtNome);
        edtCurso = findViewById(R.id.edtCurso);
        btnSalvar = findViewById(R.id.btnSalvar);
        txtLista = findViewById(R.id.txtLista);

        db = FirebaseFirestore.getInstance();

        btnSalvar.setOnClickListener(v -> salvarAluno());

        escutarAlunos();
    }

    private void salvarAluno() {

        String nome = edtNome.getText().toString();
        String curso = edtCurso.getText().toString();

        if (nome.isEmpty() || curso.isEmpty()) {
            Toast.makeText(this, "Preencha os campos", Toast.LENGTH_SHORT).show();
            return;
        }

        Aluno aluno = new Aluno(nome, curso);

        db.collection("alunos").add(aluno);

        edtNome.setText("");
        edtCurso.setText("");
    }

    private void escutarAlunos() {

        db.collection("alunos")
                .addSnapshotListener(this, (value, error) -> {

                    if (error != null) {
                        Toast.makeText(this, "Erro: " + error.getMessage(), Toast.LENGTH_LONG).show();
                        return;
                    }

                    if (value == null) return;

                    StringBuilder lista = new StringBuilder();

                    for (DocumentSnapshot doc : value.getDocuments()) {

                        String nome = doc.getString("nome");
                        String curso = doc.getString("curso");

                        lista.append(nome != null ? nome : "")
                                .append(" - ")
                                .append(curso != null ? curso : "")
                                .append("\n");
                    }

                    txtLista.setText(lista.toString());
                });
    }
}