# PHP-SYMFONY-Projekt
Repozytorium projektu R3 S6 2020

**Członkowie:**
1. Marcin Kurach (iMarcin)
2. Michał Bogusławski (BiałyPingwin)
3. Kamil Gozdalski (kgozdalski)

**1. cele:**
* dostarczanie informacji o przepisach kulinarnych

**2. specyfikacja działania:**
* umożliwienie dodawania postów
* wyświetla wybrane przez użytkownika posty
* wyświetlanie odpowiednich komentarzy do posta 
* umożliwienie dodawania komentarzy

**3. zbierane infromacje:**
* jaki post ma zostać wyszukany
* jaki komentarz ma zostać dodany

**4. Zawartość:**
- 3 widoki:
  - strona główna
  - strona posta z komentarzami
  - panel administratora
- 2 kontrolery:
  - administratora
  - użytkownika
- 4 modele:
  - wyszukiwanie postów
  - odczyt konkretnego posta i komentarzy
  - dodawanie postów
  - dodawanie komentarzy


tabela posty: 
id(inc) | author | text 
------- | ------ | ----

tabela komentarze:
id(inc) | post_id | author | text
------- | ------- | ------ | ----


Instalacja:

-composer require symfony/webpack-encore-bundle (w konsoli phpstorm)

-baza danych ma nazwe db_blog
