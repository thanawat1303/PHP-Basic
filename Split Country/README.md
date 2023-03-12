# Medthod Function
### ReadFile
  - Open file
    ```php
    fopen( <path file> , <type open> )
    ```

    - <details>
      <summary>type open</summary>
        &nbsp;<p>r = read only</p>
        &nbsp;<p>r+ = read and write</p>
        &nbsp;<p>w = write replace old data when not file will create a new file</p>
        &nbsp;<p>w+ = read and write replace old data when not file will create a new file</p>
        &nbsp;<p>a = write append old data when not file will create a new file</p>
        &nbsp;<p>a+ read and write append old data when not file will create a new file</p>
        &nbsp;<p>x = write by create a new file but if found file will return error</p>
        &nbsp;<p>x+ = read and write by create a new file but if found file will return error</p>
      </details>

  - Read file
    ```php
    fread( <path file> , <read file size> )
    ```