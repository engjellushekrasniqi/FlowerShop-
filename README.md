#  Laravel Website për Dyqan Lulesh

Ky është një aplikacion web i ndërtuar me **Laravel** që simulon funksionalitetet e një dyqani Lulesh online. Përdoruesit mund të shikojnë produkte, të regjistrohen, të kyçen, të shtojnë artikuj në shportë dhe të bëjnë porosi. Administratorët mund të menaxhojnë produktet, kategoritë dhe porositë.

---

## Teknologjitë e Përdorura

 Teknologjia         Qëllimi                                                                 

 **PHP (Laravel)**   Framework-i kryesor për backend, strukturën MVC dhe logjikën e aplikacionit 
 **HTML5**            Strukturimi i faqeve dhe përdorimi i formave interaktive               
 **CSS3**             Stilimi i faqes dhe përditësimi vizual me dizajn modern               
**Bootstrap**        Ndihmë për dizajnin responsive dhe komponente të para-bëra            
**JavaScript**       Ndërveprimet në faqe, validime dhe efekte                             
**XML**              Strukturim i të dhënave për produkte ose eksport/import të informacionit (në disa module) 
 **MySQL**            Baza e të dhënave për ruajtjen e përdoruesve, porosive dhe produkteve 
**Blade (Laravel)**  Template engine për gjenerim dinamik të HTML-it në Laravel             

---

##  Autentikimi

Autentikimi është implementuar përmes sistemit të integruar të Laravel, dhe përfshin:

- Regjistrim dhe kyçje për përdoruesit
- Panel i veçantë për administratorët
- Mbrojtje e rrotave përmes middleware `auth`
- Ruajtje e të dhënave në databazë përmes Laravel Eloquent ORM

**Shembull:**  
Përdorimi i `Auth::check()`, `Auth::user()` dhe `auth middleware` për të kontrolluar aksesin.

---

##  Përdorimi i HTML5

HTML5 është përdorur për:

- Strukturën semantike të faqeve (`<header>`, `<footer>`, `<section>`)
- Forma me atribute të avancuara (`type="email"`, `required`, `placeholder`)
- Validim bazik nga browser-i për inputet e formës

---

## Përdorimi i CSS

- CSS dhe Bootstrap janë përdorur për të krijuar një ndërfaqe të pastër dhe responsive.
- Stilizim i kartelave të produkteve, navbar-it, formularëve, etj.
- Klasat e Bootstrap si `container`, `row`, `col-md-*`, `btn`, `card`, etj. janë përdorur në masë të madhe.

---

## Përdorimi i XML

XML është përdorur në module të veçanta të projektit për:

- Ruajtjen strukturore të disa të dhënave statike ose backup të produkteve
- Mundësi importimi ose eksportimi në format XML për produkte ose porosi (në versionet e avancuara ose shtesat e projektit)

---

## Struktura e Projektit

```
laravel_website_cake_shop_project/
│
├── app/                   # Kontrolluesit, modelet dhe logjika e biznesit
├── public/                # Asset-et publike si CSS, JS dhe imazhet
├── resources/
│   ├── views/             # Blade templates për faqet
│   └── css, js            # Fajllat e stilimit dhe funksionaliteteve
├── routes/
│   └── web.php            # Rrugët e aplikacionit
├── database/
│   ├── migrations/        # Migrimet e tabelave
│   └── seeders/           # Mbushja fillestare e të dhënave
├── .env                   # Konfigurimi i databazës dhe settings të tjera
└── README.md              # Dokumentimi i projektit
```

---

## Funksionalitetet Kryesore

-  Regjistrim dhe kyçje e përdoruesve
-  Panel administrimi për menaxhimin e produkteve dhe kategorive
-  Faqe produktesh dhe detaje të produkteve
-  Shtim i produkteve në shportë
-  Blerje dhe menaxhim i porosive
-  Roli i Administratorit me akses të plotë

---

## Demo të Projektit

Vendosni pamje të ekranit këtu për të demonstruar projektin:

```
![Pamja Kryesore](screenshots/homepage.png)
![Login](screenshots/login.png)
![Shporta](screenshots/cart.png)
![Paneli Admin](screenshots/admin_panel.png)
```

>

---

## Si ta Nisesh Projektin Lokalisht


```

1. Hape projektin dhe instalo varësitë:

```bash
cd emri projektit
composer install
npm install && npm run dev
```

2. Konfiguro `.env`:

```bash
cp .env.example .env
php artisan key:generate
```

3. Krijo dhe migro databazën:

```bash
php artisan migrate
```

4. Nise serverin:

```bash
php artisan serve
```

Demo photo


<p>
  <img src="screenshots/readme1.png" alt="Demo 1" width="600"/>
</p>
<p>
  <img src="screenshots/readme2.png" alt="Demo 2" width="600"/>
</p>
<p>
  <img src="screenshots/readme3.png" alt="Demo 3" width="600"/>
</p>
<p>
  <img src="screenshots/readme4.png" alt="Demo 4" width="600"/>
</p>


> Ky projekt është zhvilluar si pjesë e një detyre mësimore.  

---
