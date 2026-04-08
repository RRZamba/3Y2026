package com.example.firebase01;

public class Aluno {

    private String nome;
    private String curso;

    public Aluno() {}

    public Aluno(String nome, String curso) {
        this.nome = nome;
        this.curso = curso;
    }

    public String getNome() { return nome; }
    public String getCurso() { return curso; }
}