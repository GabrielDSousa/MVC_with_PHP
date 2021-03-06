<?php

use Alura\Cursos\Controller\{CursosEmJson,
    CursosEmXml,
    Deslogar,
    FormularioInsercao,
    FormularioLogin,
    ListarCursos,
    Persistencia,
    Exclusao,
    FormularioEdicao,
    RealizaLogin};

return [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioInsercao::class,
    '/salvar-curso' => Persistencia::class,
    '/excluir-curso' => Exclusao::class,
    '/alterar-curso' => FormularioEdicao::class,
    '/login' => FormularioLogin::class,
    '/realiza-login' => RealizaLogin::class,
    '/logout' => Deslogar::class,
    '/buscarCursosEmJson' => CursosEmJson::class,
    '/buscarCursosEmXml' => CursosEmXml::class
];
