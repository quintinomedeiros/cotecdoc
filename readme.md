# Projeto WordPress completo no GitHub

Bem-vindo ao manaul para armazenamento completo de projeto WordPress no GitHub, incluindo código e Banco de Dados.

## Instalação

### Requisitos
- [XAMPP](https://www.apachefriends.org/index.html) ou um servidor web similar.
- PHP e MySQL configurados no Xampp.

### Passos de Instalação

1. Clone este repositório:

    ```bash
    git clone https://github.com/seu-usuario/meu-projeto-wordpress.git
    ```

2. Importe o banco de dados:

    - Use o phpMyAdmin ou outra ferramenta para importar o arquivo `dump.sql` no diretório raiz.

3. Configure o WordPress:

    - Copie `wp-config-sample.php` para `wp-config.php` e ajuste as configurações de banco de dados.

4. Inicie o servidor local:

    - Execute o seguinte comando na raiz do projeto:

    ```bash
    php -S localhost:8000 -t public
    ```

5. Acesse o WordPress no navegador:

    - Abra seu navegador e vá para http://localhost:8000 para acessar o WordPress.

## Contribuição

Contribuições são bem-vindas! Se você encontrar problemas ou tiver sugestões, sinta-se à vontade para abrir uma [issue](https://github.com/seu-usuario/meu-projeto-wordpress/issues) ou enviar uma [pull request](https://github.com/se
