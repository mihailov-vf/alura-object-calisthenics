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
