# Estudos sobre BDD com behat

Projeto de testes sobre BDD com behat 

## Configurações

* PHP 7.3.9
* Java 1.8.0_172

## Ambiente

Instale as dependências:

`composer install`

Para executar a aplicação, acesse a pasta `public` e execute: 

`php -S localhost:8000`

Para ver se está tudo certo, acesse pelo navegador a url:

`http://localhost:8000/calculadora/index`

Execute o server do selenium em um novo terminal: 

`java -jar selenium.jar`

Em outro terminal, execute:

`./vendor/bin/behat`

### Para Mac OS

Caso faltar o driver na execução do selenium:

`brew install geckodriver`

### Referências:

* https://www.agilealliance.org/glossary/bdd/#q=~(infinite~false~filters~(postType~(~'page~'post~'aa_book~'aa_event_session~'aa_experience_report~'aa_glossary~'aa_research_paper~'aa_video)~tags~(~'bdd))~searchTerm~'~sort~false~sortDirection~'asc~page~1)
* https://riptutorial.com/behat
* https://www.selenium.dev/
* https://wiki.mahara.org/wiki/Testing_Area/Behat_Testing/Steps
* https://docs.behat.org/en/v2.5/cookbook/behat_and_mink.html
* https://docs.behat.org/en/latest/index.html
