# Rendszerterv
## 1. A rendszer célja

A rendszer célja,hogy scrum meetingeket létre tudjunk hozni, amikről értesítéseket fogunk kapni, valamint tudjuk értékelni a sprintet, amiről majd diagramm is fog készülni, ami megkönnyítheti a programozók munkáját. 
Az alkalmazás Webes felülettel rendelkezik. 
 

## 2. Projektterv

### 2.1 Projektszerepkörök, felelőségek:
 * Scrum masters: Hadobás Dávid
 * Product owner: Hadobás Dávid
 * Üzleti szereplő:Hadobás Dávid
 
### 2.2 Projektmunkások és felelőségek:
 * Frontend:Jánosik Vanessza, Aranyi Patrik, Anka Bálint Kristóf
 * Backend:Jánosik Vanessza, Aranyi Patrik, Anka Bálint Kristóf
 * Tesztelés:Jánosik Vanessza, Aranyi Patrik, Anka Bálint Kristóf
 
### 2.3 Ütemterv:

 |Funkció | Feladat | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |
 | :---: | --- | --- | --- | --- | --- | --- |
 |Követelmény specifikáció |Megírás | 1 | 1 | 1 | 1 | 1 | 
 |Funkcionális specifikáció|Megírás | 1 | 1 | 1 | 1 | 1 |
 |Rendszerterv |Megírás | 1 | 1 | 1 | 1 | 1 |
 |Program |Képernyőtervek elkészítése | 2 | 1 | 1 | 1 | 1 |
 |Program |Prototípus elkészítése | 3 | 8 | 8 | 8 | 8 |
 |Program |Alapfunkciók elkészítése | 4 | 9 | 9 | 9 | 9 |
 |Program |Tesztelés | 4 | 2 | 2 | 2 | 2 |

### 2.4 Mérföldkövek:
 * Követelmények összegyűjtése és dokumentálása
 * Tervezési fázis, amely magában foglalja az architektúra, a felhasználói felület és az adatmodell tervezését
 * Fejlesztés, ahol a kód elkészítése és tesztelése zajlik
 * Tesztelési fázis, amely magában foglalja a funkcionális és a használhatósági teszteket
 * Üzembe helyezés és telepítés a valós környezetbe
 * Karbantartás és támogatás a termék életciklusának folyamán.

## 3. Üzleti folyamatok modellje

 Ez a modell általában tartalmazza az adatgyűjtés és adatfeldolgozás folyamatát, az események és feladatok kezelését, a felhasználói élményt és az ügyfélszolgálati folyamatokat. Az alkalmazás hatékonyságának növelése érdekében a modell lehetőséget biztosít a folyamatok optimalizálására, a munkafolyamatok automatizálására és az adatok analizálására, hogy javítsák a döntéshozatalt és az ügyfélélményt.

## 4. Követelmények

### Funkcionális követelmények
| Id | Funkció | Leírás |
| :---: | --- | --- |
| 1 | Események rögzítése | A felhasználó új eseményeket tud rögzíteni az alkalmazásban, beleértve a címet, dátumot, időtartamot, típust és leírást. |
| 2 | Események módosítása | A felhasználó módosíthatja az események adatait, mint például cím, dátum, időtartam és leírás. |
| 3 | Események törlése | A felhasználó törölheti az eseményeket az alkalmazásból. |
| 4 | Események keresése | A felhasználó keresni tud az események között különböző szempontok alapján, például cím, dátum, típus, stb. |
| 5 | Események megjelenítése | A felhasználó megtekintheti az összes rögzített eseményt listázva, valamint az események részletes nézetét is megtekintheti. |
| 6 | Események exportálása | A felhasználó exportálhatja az események listáját CSV vagy más népszerű fájlformátumban. |
| 7 | Emlékeztetők kezelése | Az alkalmazás emlékeztetőt küld a felhasználónak az eseményekről, időben előre beállított emlékeztetők segítségével. |
| 8 | Felhasználói fiók kezelése | A felhasználók regisztrálhatnak, bejelentkezhetnek és kijelentkezhetnek a fiókjukból, és megtekinthetik a saját eseményeiket. |
| 9 | Jogosultságkezelés | Az alkalmazás adminisztrátora jogosultságokat adhat meg, hogy különböző felhasználók eltérő hozzáféréssel rendelkezzenek az alkalmazáshoz. |
| 10| Statisztikák nyomon követése | Az alkalmazás statisztikákat nyomon követi, például az események számát, a legnépszerűbb típusokat, stb. |


 

### Nemfunkcionális követelmények

| Id | Megnevezés| Leírás |
| :---: | --- | --- |
| 1 | Felhasználói felület | Az alkalmazás felhasználói felülete felhasználóbarát, intuitív és könnyen kezelhető legyen. |
| 2 | Teljesítmény | Az alkalmazásnak gyorsan kell reagálnia a felhasználói kérésekre, és az adatbázis műveleteknek gyorsan kell lefutniuk. |
| 3 | Biztonság | Az alkalmazásnak biztonságosnak kell lennie az adatvédelem és az adatbiztonság szempontjából. A felhasználók csak azokat az adatokat láthatják, amelyekre jogosultak. |
| 4 | Skálázhatóság | Az alkalmazásnak skálázhatónak kell lennie, hogy az adatbázis méretének növekedésekor is hatékonyan működjön. |
| 5 | Megfelelőség | Az alkalmazásnak meg kell felelnie a vonatkozó jogszabályoknak és előírásoknak, például az adatvédelmi törvénynek és az internetes biztonsági előírásoknak. |
| 6 | Megbízhatóság | Az alkalmazásnak megbízhatónak kell lennie, és minimálisra kell csökkentenie a leállásokat vagy a hibás működést. |

### Támogatott eszközök
VS Code

## 5. Funkcionális terv
 Az alkalmazás a rendszerszereplők közül két felhasználótípust különböztet meg az admint és az alapfelhasználót. Az admin beléphet minden más szerepkörbe. Az adminok tudják létrehozni a scrum meetingeket. És ők tudják a felhasználók teljesítményét értékelni. A felhasználók meg tudják nézni, milyen meetingjeik lesznek, láthatják egy diagrammon, hogy hogyan teljesítettek a sprint során. Valamint a meetingekhez tudnak megjegyzéseket hozzáfűzni. A felhasználó meg tudja tekinteni az adatait, amit szerkeszteni is tud.

### 5.1 Rendszerszereplők
 

## 6. Fizikai környezet
 Megvásárolt komponensei nincsenek, ennek köszönhetően egy böngésző használatával már használható is.

### Hardver topológia
 Az alkalmazás böngészőből érhető el, így bármilyen eszközről elérhető, amin lehet használni böngészőt.

### Fejlesztő eszközök
	
 A webalkalmazást Visual Studio Coda-ban írjuk, amit laravel segítségével keszítjük el. 

## 8. Architekturális terv
 A program php laravel webes keretrendszert használ. A rendszernek sqlite adatbázisa van. A program elérhető bármilyen böngészőből, agy bármilyen eszközön, ahol használni tudunk egy böngészőt el tudjuk érni az oldalt. 
 
## 10. Implementációs terv

Webesfelületre készül, php nyelven laravel keretrendszerrel fog elkészülni Visual Studi Code programban. Ezeket a technológiákat amennyire lehet külön fájlokba írjuk, és így csatoljuk egymáshoz, hogy jobban átláthatóbb legyen a program, könnyebben tudjunk változtatni a program kódján, valamint az egyszerűbb bővítés érdekében.

## 12. Telepítési terv
Fizikai telepítési terv: Nincs
Szoftver telepítési terv: Nincs, bármilyen böngészőből el tudjuk érni.

## 11. Tesztterv


### A tesztelési jegyzőkönyv kitöltésére egy sablon:

**Tesztelő:** 

**Tesztelés dátuma:**

Tesztszám | Rövid leírás | Várt eredmény | Eredmény | Megjegyzés
----------|--------------|---------------|----------|-----------


## 13. Karbantartási terv
A karbantartási terve az alábbiakat tartalmazza:
* Heti rendszeres biztonsági mentés készítése az adatbázisról
* Havonta frissíteni a szoftvert az új funkciók és javítások érdekében
* Évente ellenőrizni a hardvereket és szükség esetén frissíteni vagy cserélni az elavult részeket
* Megfigyelni a rendszer teljesítményét, és szükség esetén optimalizálni a működést
* Rendszeres karbantartásokat végezni, beleértve a víruskeresést, a tűzfal és biztonsági beállítások ellenőrzését
* Az ügyfelekkel való kapcsolattartás, figyelni a visszajelzéseket és javítani a felmerülő problémákat.

A fenti karbantartási tervek segítenek biztosítani, hogy az alkalmazás folyamatosan hatékonyan működjön, és minimalizálja a leállások vagy hibás működések előfordulását.

