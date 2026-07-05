# Chat-php

![PHP](https://img.shields.io/badge/PHP-Web%20Chat-777BB4)
![Frontend](https://img.shields.io/badge/Frontend-CSS-blue)
![Stato](https://img.shields.io/badge/Stato-Progetto%20scolastico-orange)
![Categoria](https://img.shields.io/badge/Categoria-Messaggistica%20Web-green)

**Chat-php** è un progetto scolastico sviluppato in **PHP** e **CSS** che implementa una chat web per lo scambio di messaggi tra utenti tramite interfaccia browser.

Il progetto è stato realizzato con finalità didattiche per esercitarsi su sviluppo lato server, gestione delle richieste web e organizzazione di una semplice applicazione di messaggistica.

---

## Indice

- [Descrizione](#descrizione)
- [Funzionalità](#funzionalità)
- [Tecnologie utilizzate](#tecnologie-utilizzate)
- [Struttura del progetto](#struttura-del-progetto)
- [Architettura logica](#architettura-logica)
- [Esecuzione del progetto](#esecuzione-del-progetto)
- [Obiettivi didattici](#obiettivi-didattici)
- [Possibili miglioramenti futuri](#possibili-miglioramenti-futuri)
- [Autore](#autore)
- [Licenza](#licenza)

---

## Descrizione

L’obiettivo del progetto è realizzare una chat web semplice, accessibile via browser, in cui i messaggi vengono gestiti lato server con PHP e mostrati tramite interfaccia stilizzata in CSS.

L’applicazione permette la comunicazione testuale in un contesto didattico, concentrandosi su chiarezza della logica e struttura del codice.

---

## Funzionalità

Il progetto include funzionalità tipiche di una chat web base:

- invio di messaggi tramite form;
- visualizzazione dei messaggi nella pagina di chat;
- aggiornamento della conversazione;
- separazione tra logica backend e stile frontend;
- interfaccia semplice e leggibile.

> In base all’implementazione presente nel repository, possono esserci funzionalità aggiuntive (es. gestione utenti, timestamp, reset chat, ecc.).

---

## Tecnologie utilizzate

- **PHP** (`65.2%`)
- **CSS** (`34.8%`)

---

## Struttura del progetto

La struttura reale può variare in base all’organizzazione interna. In generale:

```text
Chat-php/
│
├── ... file PHP (logica chat)
├── ... file CSS (stile interfaccia)
├── index.php (o pagina principale)
│
└── README.md
```

> Se vuoi, posso anche prepararti una struttura precisa file-per-file pronta da inserire nel README.

---

## Architettura logica

Il progetto segue una struttura web essenziale:

- **backend (PHP)**: ricezione input, elaborazione e gestione dei messaggi;
- **frontend (HTML generato + CSS)**: visualizzazione chat e componenti UI;
- **interazione utente**: invio/ricezione tramite pagine web e form.

Questa separazione facilita manutenzione e miglioramenti futuri.

---

## Esecuzione del progetto

Per eseguire il progetto in locale puoi usare:

- **XAMPP**
- **MAMP**
- **WAMP**
- server PHP integrato

### Avvio rapido (server PHP integrato)

Dalla cartella del progetto:

```bash
php -S localhost:8000
```

Apri nel browser:

```text
http://localhost:8000
```

> Se il progetto usa una directory specifica (es. `public/`), avvia il server da quella cartella.

---

## Obiettivi didattici

Questo repository contiene un **progetto scolastico** sviluppato per esercitarsi su:

- sviluppo web con PHP;
- gestione di richieste HTTP e form;
- organizzazione interfaccia utente con CSS;
- struttura base di un sistema di messaggistica;
- documentazione tecnica professionale su GitHub.

---

## Possibili miglioramenti futuri

- supporto multiutente con nickname;
- persistenza messaggi su database (MySQL);
- aggiornamento chat in tempo reale (AJAX/WebSocket);
- autenticazione utenti;
- miglioramento UI responsive;
- moderazione e filtri contenuti.

---

## Autore

Progetto realizzato da **[ulviSamuel](https://github.com/ulviSamuel)**.

---

## Licenza

Questo progetto è stato sviluppato per scopi scolastici e didattici.
