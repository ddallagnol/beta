<?php

return [
    'userManagement' => [
        'title'          => 'Ger. de Usuários',
        'title_singular' => 'Gerenciamento de usuário',
    ],
    'permission'     => [
        'title'          => 'Permissões',
        'title_singular' => 'Permissão',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Título',
            'title_helper'      => '',
            'created_at'        => 'Criado em',
            'created_at_helper' => '',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => '',
            'deleted_at'        => 'Removido em',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Funções',
        'title_singular' => 'Função',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Título',
            'title_helper'       => '',
            'permissions'        => 'Permissões',
            'permissions_helper' => '',
            'created_at'         => 'Criado em',
            'created_at_helper'  => '',
            'updated_at'         => 'Atualizado em',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Removido em',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Usuários',
        'title_singular' => 'Usuário',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Nome',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verificado em',
            'email_verified_at_helper' => '',
            'password'                 => 'Senha',
            'password_helper'          => '',
            'roles'                    => 'Funções',
            'roles_helper'             => '',
            'remember_token'           => 'Token de Lembrete',
            'remember_token_helper'    => '',
            'created_at'               => 'Criado em',
            'created_at_helper'        => '',
            'updated_at'               => 'Atualizado em',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Removido em',
            'deleted_at_helper'        => '',
        ],
    ],
    'status'         => [
        'title'          => 'Estados',
        'title_singular' => 'Estado',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nome',
            'name_helper'       => '',
            'color'             => 'Cor',
            'color_helper'      => '',
            'created_at'        => 'Criado em',
            'created_at_helper' => '',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => '',
            'deleted_at'        => 'Removido em',
            'deleted_at_helper' => '',
        ],
    ],
    'priority'       => [
        'title'          => 'Prioridades',
        'title_singular' => 'Prioridade',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nome',
            'name_helper'       => '',
            'color'             => 'Cor',
            'color_helper'      => '',
            'created_at'        => 'Criado em',
            'created_at_helper' => '',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => '',
            'deleted_at'        => 'Removido em',
            'deleted_at_helper' => '',
        ],
    ],
    'category'       => [
        'title'          => 'Categorias',
        'title_singular' => 'Categoria',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nome',
            'name_helper'       => '',
            'color'             => 'Cor',
            'color_helper'      => '',
            'created_at'        => 'Criado em',
            'created_at_helper' => '',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => '',
            'deleted_at'        => 'Removido em',
            'deleted_at_helper' => '',
        ],
    ],
    'ticket'         => [
        'title'          => 'Solicitações',
        'title_singular' => 'Solicitação',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'title'                   => 'Título',
            'title_helper'            => '',
            'content'                 => 'Conteúdo',
            'content_helper'          => '',
            'status'                  => 'Estado',
            'status_helper'           => '',
            'priority'                => 'Prioridade',
            'priority_helper'         => '',
            'category'                => 'Categoria',
            'category_helper'         => '',
            'author_name'             => 'Nome do Autor',
            'author_name_helper'      => '',
            'author_email'            => 'Email do Autor',
            'author_email_helper'     => '',
            'assigned_to_user'        => 'Atribuído ao Usuário',
            'assigned_to_user_helper' => '',
            'comments'                => 'Comentários',
            'comments_helper'         => '',
            'created_at'              => 'Criado em',
            'created_at_helper'       => '',
            'updated_at'              => 'Atualizado em',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Removido em',
            'deleted_at_helper'       => '',
            'attachments'             => 'Anexos',
            'attachments_helper'      => '',
        ],
    ],
    'comment'        => [
        'title'          => 'Comentários',
        'title_singular' => 'Comentário',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'ticket'              => 'Solicitação',
            'ticket_helper'       => '',
            'author_name'         => 'Nome do Autor',
            'author_name_helper'  => '',
            'author_email'        => 'Email do Autor',
            'author_email_helper' => '',
            'user'                => 'Usuário',
            'user_helper'         => '',
            'comment_text'        => 'Texto do Comentário',
            'comment_text_helper' => '',
            'created_at'          => 'Criado em',
            'created_at_helper'   => '',
            'updated_at'          => 'Atualizado em',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Removido em',
            'deleted_at_helper'   => '',
        ],
    ],
    'auditLog'       => [
        'title'          => 'Logs de Auditoria',
        'title_singular' => 'Log de Auditoria',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'description'         => 'Descrição',
            'description_helper'  => '',
            'subject_id'          => 'ID do Assunto',
            'subject_id_helper'   => '',
            'subject_type'        => 'Tipo de Assunto',
            'subject_type_helper' => '',
            'user_id'             => 'ID do Usuário',
            'user_id_helper'      => '',
            'properties'          => 'Propriedades',
            'properties_helper'   => '',
            'host'                => 'Proprietário',
            'host_helper'         => '',
            'created_at'          => 'Criado em',
            'created_at_helper'   => '',
            'updated_at'          => 'Atualizado em',
            'updated_at_helper'   => '',
        ],
    ],
];
