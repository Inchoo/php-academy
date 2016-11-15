# Project - Instagram like gallery

## Opis
Potrebno je izraditi web aplikaciju koja predstavlja galeriju fotografija korisnika, prema uzoru na Instagram. 
Aplikacija treba omogučiti korisniku postavljanje javnih i privatnih fotografija te primjenjivanje predefiniranih filtera na učitane slike.

## Upute za izradu
Aplikacija treba biti izrađena pomoću PHPa i MySQLa korištenjem biblioteke za obradu slika koja se nalazi
https://github.com/ivanweiler/phpacademy-image-filters

Korištenje Laravel frameworka nije obvezno, ali je preporučeno. MVC struktura je obvezna.

## Zahtjevi

### Nužne funkcionalnosti
* Stranica (početna) na kojoj se izlistavaju sve fotografije. Ukoliko korisnik nije prijavljen, trebaju se prikazati samo javne fotografije. Ukoliko je korisnik prijavljen, trebaju se prikazati i privatne fotografije
* Formular za prijavu korisnika
* Forma za upload novih fotografija. Na istom ekranu korisnik treba moći odabrati naslov i vidljivost fotografije te filter koji (opcionalno) želi primijeniti
* Samo prijavljeni korisnik može dodati nove fotografije
* Mogućnost brisanja fotografija

### Poželjne funkcionalnosti
* Mogućnost komentiranja fotografije
* Mogućnost sheranja na Twitter, Facebook i Google+ (barem jedno od navedenog)
* Mogućnost editiranja podataka vezanih uz fotografiju (naziv, vidljivost…)
* Interna like funkcionalnost + sortiranje po broju likeova (most popular)
* Paginacija (ili ajaxirani Load more)
* Sustav sa više korisnika (gdje svaki korisnik ima svoje privatne fotografije)

### Opcionalne funkcionalnosti
* Pretraživanje po naslovu
* Sheranje privatne fotografije, “tajni” url
* Dodjeljivanje tagova vezanih uz fotografiju; pretraga po tagovima


Google Docs verzija dokumenta: https://goo.gl/Q6iY5u

