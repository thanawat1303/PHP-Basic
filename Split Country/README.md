# Medthod Function
### ReadFile
  - Open file
    ```
    fopen( <path file> , <type open> )
    ```
    
    - <details>
      <summary>type open</summary>
        <p>r -> read only</p>
        <p>r+ -> read and write</p>
        <p>w -> write replace old data when not file will create a new file</p>
        <p>w+ -> read and write replace old data when not file will create a new file</p>
        <p>a -> write append old data when not file will create a new file</p>
        <p>a+ read and write append old data when not file will create a new file</p>
        <p>x -> write by create a new file but if found file will return error</p>
        <p>x+ -> read and write by create a new file but if found file will return error</p>
      </details>

  - Read file
    ```
    fread( <path file> , <read file size> )
    ```