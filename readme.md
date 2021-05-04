# Tarea 4

Modifique el sitio web en PHPFramex sobre información relacionada a libros, autores y editoriales. Para ello debe modificar el controlador de cada una de las entidades, tal como se muestra en el material del curso, de forma que accedan a los datos mediante una base de datos SQLite. Mantenga las vistas utilizando *Mustache* e incluya enlaces entre los elementos de forma que se pueda navegar entre los libros, los autores y las editoriales asociadas. Adicionalmente cree pantallas que permitan agregar y modificar la información de los libros, autores y editoriales.

![](books.svg)

Realice un diagrama similar al presentado en el material para mostrar la relación entre todos los controladores y las vistas.

La tarea se debe entregar por medio del [Classroom de Github](https://classroom.github.com/a/RjTboiht) y publicarlo en un sitio web.

## Datos de libros

Utilice los siguientes datos sobre libros:

|id|title            |edition       |copyright|language |pages|author                   |author_id|publisher        |publisher_id|
|---|-----------------|--------------|---------|---------|-----|-------------------------|---------|-----------------|------------|
|1  |Operating System Concepts|9th           |2012     |ENGLISH  |976  |Abraham Silberschatz     |1        |John Wiley & Sons|1           |
|2  |Database System Concepts|6th           |2010     |ENGLISH  |1376 |Abraham Silberschatz     |1        |John Wiley & Sons|1           |
|3  |Computer Networks|5th           |2010     |ENGLISH  |960  |Andrew S. Tanenbaum      |2        |Pearson Education|2           |
|4  |Modern Operating Systems|4th           |2014     |ENGLISH  |1136 |Andrew S. Tanenbaum      |2        |Pearson Education|2           |

## Datos de autores

Utilice los siguientes datos sobre autores:

|id|author           |nationality   |birth_year|fields   |books__book_id|books__title             |
|---|-----------------|--------------|----------|---------|--------------|-------------------------|
|1  |Abraham Silberschatz|Israelis / American|1952      |Database Systems, Operating Systems|1             |Operating System Concepts|
|   |                 |              |          |         |2             |Database System Concepts |
|2  |Andrew S. Tanenbaum|Dutch / American|1944      |Distributed computing, Operating Systems|3             |Computer Networks        |
|   |                 |              |          |         |4             |Modern Operating Systems |

## Datos de editoriales

Utilice los siguientes datos sobre editoriales:

|id|publisher        |country       |founded|genere   |books__book_id|books__title             |
|---|-----------------|--------------|-------|---------|--------------|-------------------------|
|1  |John Wiley & Sons|United States |1807   |Academic |1             |Operating System Concepts|
|   |                 |              |       |         |2             |Database System Concepts |
|2  |Pearson Education|United Kingdom|1844   |Education|3             |Computer Networks        |
|   |                 |              |       |         |4             |Modern Operating Systems |

