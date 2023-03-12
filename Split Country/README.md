### Medthod Function
# ReadFile
  - Open file
    ```
    fopen( <path file> , <type open> )
    ```
    - <details>
      <summary>type open</summary>
      - r -> read only
      - r+ -> read and write
      - w -> write replace old data when not file will create a new file
      - w+ -> read and write replace old data when not file will create a new file
      - a -> write append old data when not file will create a new file
      - a+ read and write append old data when not file will create a new file
      - x -> write by create a new file but if found file will return error
      - x+ -> read and write by create a new file but if found file will return error
      </details>
  - Read file
    ```
    fread( <path file> , <read file size> )
    ```