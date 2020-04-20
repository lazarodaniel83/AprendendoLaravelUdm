@extends('layouts.principal')

    @section('titulo','Departamentos')
    @section('conteudo')
    <h3>Departamentos</h3>
    <ul>
        <li>Computadores</li>
        <li>Eletronicos</li>
        <li>Acessorios</li>
        <li>Roupas</li>
    </ul>  
    
    @alerta(['titulo'=>'Erro Fatal','tipo'=>'info'])
    <P><strong>Erro inesperado</strong></P>
        <p>Ocorreu um erro inesperado</p>
    @endalerta

    @alerta(['titulo'=>'Erro Fatal','tipo'=>'error'])
        <P><strong>Erro inesperado</strong></P>
        <p>Ocorreu um erro inesperado</p>
    @endalerta
    
    @alerta(['titulo'=>'Erro Fatal','tipo'=>'success'])
        <P><strong>Erro inesperado</strong></P>
        <p>Ocorreu um erro inesperado</p>
    @endalerta

    @alerta(['titulo'=>'Erro Fatal','tipo'=>'warning'])
        <P><strong>Erro inesperado</strong></P>
        <p>Ocorreu um erro inesperado</p>
    @endalerta

    @endsection