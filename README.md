# PHP-SYMFONY-Projekt
Repozytorium projektu R3 S6 2020

**Członkowie:**
1. Marcin Kurach
2. Michał Bogusławski
3. Kamil Gozdalski 

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
