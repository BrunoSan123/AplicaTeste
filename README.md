# Aplicações Testes
 


### Feitas com ![](https://surround-bg.com/wp-content/uploads/2018/10/laravel-logo.png)

 * As aplicações foram feitas usando o framework Laravel
 * Existem dois tipos que aplicações que cobrem as exigências
 * Uma delas é um MVC com o formulário requerido
 * A outra é um REST API com os métodos POST e GET habilitados


 ### itens pedidos no teste:

 


### Criar um formulário para envio de currículos com os seguintes campos:
- [x] Nome 
- [x] e-mail 
- [x] telefone 
- [x] Cargo Desejado (Campo texto livre) 
- [x] Escolaridade (Campo select) 
- [x] observações
- [x] arquivo e data e hora do envio.


* obs:
    - [x] O formulário deve ser validado
    - [x] Apenas o campo observações é opcional
    - [x] Não devem ser aceitos arquivos que não possuam as seguintes extensões: .doc, .docx ou .pdf
    - [x] O tamanho máximo do arquivo é de 1MB
    - [x] Coloque as validações que você achar necessário
    - [x] Use o PSR-2 como padrão de codificação
    - [x] As bibliotecas devem ser carregadas via composer
    - [x] Fique à vontade para usar qualquer framework da sua preferência (ou nenhum)
    - [x] Os dados devem ser armazenados em um banco de dados. Além das informações acima, o IP e a data e hora do envio devem ficar registrados
    - [x] Um e-mail deve ser enviado com os dados do formulário


    *obs da aplicação:

    > o banco de dados usado foi o mysql, mas pode ser mudado no arquivo .env,dai é só executar as migrations já contidas no projeto

    > para o envio de email  foi usado o  mailTrap como client smtp para testes, mas se já tiverem as configurações do host de email, é só setar elas no arquivo .env

    > O arquivo fica salvo localmente no storage da aplicação,optei por não usar nenhum serviço de storage como firebase

