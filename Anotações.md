# Anotações

### Object Calistenics
1. Evitar uso de getters e setters
    1. Tell, don't ask
        - Não expor o estado interno do objeto.
        - Expor apenas o comportamento.
2. Reduzir a [Complexidade cognitiva](https://www.c-sharpcorner.com/blogs/cognitive-complexity-vs-cyclomatic-complexity-an-example-with-c-sharp)
    1. Ter apenas um nível de identação por método
        - Extrair lógicas complexas para outros métodos
    2. Não utilizar else
        - Early return
        - Fail fast
3. Enriquecendo o domínio
    1. Evitar o exagero no uso de tipos primitivos
        - Obsseção por tipos primitivos
        - Tipos primitivos não carregam um significado para o domínio
    2. Coleções de primeira classe
        - Interações com detalhes de uma collection devem ser feitas por uma classe que encapsule a collection
        - [dont-use-collection-directly](https://javascript.plainenglish.io/dont-use-collection-directly-93a5457a8e40)
        - [example-of-the-object-calisthenics-first-class-collection-rule](https://stackoverflow.com/questions/53535573/example-of-the-object-calisthenics-first-class-collection-rule-in-c)
4. Mantendo a legibilidade
    1. Um ponto (operador de acesso de objetos) por linha (instrução)
        - Ao evitar de acessar métodos e estruturas internas em um objeto, garantimos o encapsulamento
        - Reforça a aplicação da Lei de Demeter
    2. Não abrevie
        - Nomes muito grandes indicam possivelmente mais de uma responsabilidade
        - Abreviações por praticidade de repetição na escrita indicam necessidade de revisão no encapsulamento
