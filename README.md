# 🏠 Web-Immobiliare
Piattaforma immobiliare full-stack per la pubblicazione, ricerca e gestione di annunci in tutta Italia.
Gli utenti registrati pubblicano i propri immobili, li gestiscono dalla dashboard personale e possono ricevere richieste di visita direttamente dalla pagina dell'annuncio.

![PHP](https://img.shields.io/badge/PHP_8-777BB4?style=flat&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat&logo=laravel&logoColor=white)
![Livewire](https://img.shields.io/badge/Livewire-FB70A9?style=flat&logo=livewire&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap_5-7952B3?style=flat&logo=bootstrap&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white)

---

## Screenshot

**Homepage** — hero con ricerca, mappa interattiva, nuove acquisizioni e testimonianze

![Homepage](screen/home.png)

**Annunci** — griglia card con immagine, stato disponibilità e filtri per città e stanze

![Annunci](screen/properties.png)

**Dettaglio immobile** — galleria, specifiche tecniche e form di contatto per richiedere una visita

![Dettaglio](screen/show.png)

**Dashboard utente** — riepilogo annunci attivi, visualizzazioni e preferiti

![Dashboard](screen/dashboard.png)

**Analisi di mercato** — indici di assorbimento, rendimento annualizzato e top locality per area

![Analisi](screen/analisi.png)

---

## Funzionalità

- Autenticazione completa con Laravel Fortify (registrazione, login, reset password)
- Pubblicazione annunci con upload multiplo di immagini
- Ricerca per titolo, città e numero di stanze
- Dashboard personale con riepilogo attività in tempo reale
- Modifica e cancellazione annunci tramite componenti **Livewire** (senza ricaricare la pagina)
- Form di contatto integrato nella pagina dell'annuncio per richiedere una visita
- Mappa interattiva in homepage per la geolocalizzazione degli asset
- Pagina Analisi di Mercato con dati su indici immobiliari e performance per locality
- Design dark-mode completamente custom, responsive su tutti i dispositivi

---

## Tech Stack

| Layer | Tecnologie |
|-------|-----------|
| Backend | PHP 8, Laravel |
| Autenticazione | Laravel Fortify |
| Frontend dinamico | Livewire |
| Template engine | Blade |
| Stile | Bootstrap 5, CSS custom |
| Database | MySQL 8 |

---

**Prerequisiti:** PHP 8+, Composer, MySQL

```bash
git clone https://github.com/RiccardoLaRosa/Web-Immobiliare.git
cd Web-Immobiliare
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
php artisan serve
```

### Credenziali di test

| Ruolo | Email | Password |
|-------|-------|----------|
| Utente | test@example.com | password |

> Modifica i valori nel seeder se differenti.

---

## Struttura del progetto

```
app/
├── Http/Controllers/   # Controller per annunci, dashboard, mercato
├── Livewire/           # Componenti Livewire (edit inline, listing)
└── Models/             # Immobile, User, Image
resources/views/
├── layouts/            # Layout principale con navbar e footer
├── immobili/           # Index, show, create, edit
├── dashboard/          # Dashboard utente
└── mercato/            # Pagina analisi di mercato
database/
└── migrations/
```

---

## Galleria

<table>
  <tr>
    <td align="center"><b>Homepage</b></td>
    <td align="center"><b>Annunci</b></td>
  </tr>
  <tr>
    <td><img src="screen/home.png" alt="Homepage"/></td>
    <td><img src="screen/properties.png" alt="Annunci"/></td>
  </tr>
  <tr>
    <td align="center"><b>Dettaglio immobile</b></td>
    <td align="center"><b>Dashboard utente</b></td>
  </tr>
  <tr>
    <td><img src="screen/show.png" alt="Dettaglio"/></td>
    <td><img src="screen/dashboard.png" alt="Dashboard"/></td>
  </tr>
  <tr>
    <td align="center"><b>Modifica annuncio</b></td>
    <td align="center"><b>Analisi di mercato</b></td>
  </tr>
  <tr>
    <td><img src="screen/edit.png" alt="Modifica"/></td>
    <td><img src="screen/analisi.png" alt="Analisi"/></td>
  </tr>
</table>

---

## Autore

**Riccardo Federico La Rosa**

[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=flat&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/riccardo-federico-la-rosa-4999551ab/)
[![GitHub](https://img.shields.io/badge/GitHub-181717?style=flat&logo=github&logoColor=white)](https://github.com/RiccardoLaRosa)
