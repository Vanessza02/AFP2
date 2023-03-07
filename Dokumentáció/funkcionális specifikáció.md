# Funkcionális specifikáció
## 1. Jelenlegi helyzet leírása

Az oktatásért felelős szervek hierarchikus rendszerében legalul foglalnak helyet az iskolák. Ebből adódóan mi kifejlesztettük az iskolák segítésére ezt az alkalmazást a tanárok és diákok részére egyaránt.

## 2. Vágyállomrendszer leírása

A projekt célja egy olyan alkalmazás, amely az alapfunkciók (+, -, *, /) mellett további műveleteket is tartalmaz, így elősegíti a tanulást. Látványos, színes felülettel rendelkezik az alkalmazás, hogy felkeltse a felhasználók figyelmét. 

## 3. Jelenlegi üzleti folyamatok modellje

A mai világban az oktatás nem használja ki a már meglévő technológiákat arra, hogy a tanulást sokkal szórakoztatóbbá tegye. A jelenlegi világban a fiatalok egyre kevésbé használják a "klasszikus" zsebszámológépet, ezért mi alternatív módszert ajánlunk fel.

## 4. Igényelt üzleti folyamatok modellje

Egy egyszerűen és gyorsan használható grafikus alkalmazás létrehozása, mely a belépést követően, alap felhasználói joggal rendelkezve is működtethető.

## 5. Követelménylista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| K1 | android alkalmazás | számológép | A számológép a matematikai számitások,számolások meggyorsítására szolgáló eszköz. |
| K2 | Funkció | Összeadás | A számológép 2 és több érték összeadására képes |
| K3 | Funkció | Kivonás | A számológép 2 és több érték kivonására képes |
| K4 | Funkció | Szorzás | A számológép 2 és több érték szorzására képes | 
| K5 | Funkció | Osztás | A számológép 2 és több érték osztására képes |  
| K6 | Funkció | Egyenlő | A számológép kijelzi a műveletek eredményét |

## 6. Használati esetek

Általános/üzleti felhasználó: A szoftver teljeskörű működtetéséhez elegendő alap felhasználói jog, nem szükséges rendszergazdai, vagy admin hozzáférés.\
A szoftver segítségével alap matematikai számításokat végezhet el a használó személy egyszerűen és gyorsan.\
Üzleti szempontok szerint is nagy segítséget biztosíthat az alkalmazás, az egyéb adminisztrációk, könyvelések, stb... során.

## 7. Megfeleltetés, hogyan fedik le a használati eseteket a követelményeket

A felhasználó kettő vagy több valós számmal végezhet alap matematikai műveleteket (+, -, *, /), melyek megfelelő sorrendben történő megadása során az alkalmazás megadja számunkra a művelet végeredményét.

## 8. Képernyőtervek

![képernyőkép.jpg](https://github.com/abalint49/afp1/blob/main/Dokument%C3%A1ci%C3%B3/k%C3%A9perny%C3%B6k%C3%A9p/k%C3%A9perny%C5%91k%C3%A9p.jpg)

## 9. Forgatókönyvek

A számológép segítségével alap- és magasabb szintű számítási műveleteket végezhet el.
- Először adja meg azt a számot, amellyel az adott matematikai számítást szeretné végezni, majd koppintson a kívánt műveleti jelre (+, -, *, /).
- Ezt követően adja meg a művelet második tényezőjét.
- Amennyiben több számmal szeretné elvégezni a számolást, ismételje meg az első és második lépéseket, ahányszor szükséges.
- Végül a végeredmény kiíratásához koppintson az egyenlőség (=) jelre.
Az alkalmazás Android 8.0 vagy újabb verziót futtató készülékeken használható.

## 10. Funkció - követelmény megfeleltetése

### Funkcionális követelmények

   | Id | Modul | Név | Leírás |
   | :---: | --- | --- | --- |   
   | K01 | android alkalmazás | számológép | A számológép a matematikai számitások,számolások meggyorsítására szolgáló eszköz. |
   | K02 | Funkció | Összeadás | A számológép 2 és több érték összeadására képes |
   | K03 | Funkció | Kivonás | A számológép 2 és több érték kivonására képes |
   | K04 | Funkció | Szorzás | A számológép 2 és több érték szorzására képes | 
   | K05 | Funkció | Osztás | A számológép 2 és több érték osztására képes |  
   | K06 | Funkció | Egyenlő | A számológép kijelzi a műveletek eredményét |
   | K07 | Funkció | 0 | jelenlegi szám*10 + 0 |
   | K08 | Funkció | 1 | jelenlegi szám*10 + 1 |
   | K09 | Funkció | 2 | jelenlegi szám*10 + 2 |
   | K10 | Funkció | 3 | jelenlegi szám*10 + 3 |
   | K11 | Funkció | 4 | jelenlegi szám*10 + 4 |
   | K12 | Funkció | 5 | jelenlegi szám*10 + 5 |
   | K13 | Funkció | 6 | jelenlegi szám*10 + 6 |
   | K14 | Funkció | 7 | jelenlegi szám*10 + 7 |
   | K15 | Funkció | 8 | jelenlegi szám*10 + 8 |
   | K16 | Funkció | 9 | jelenlegi szám*10 + 9 |

### Nemfunkcionális követelmények

   | Id | Megnevezés| Leírás |
   | :---: | --- | --- |
   | K1 | Egyszerű, könnyen átlátható felület (Design) | Felhasználók számára könnyen kezelhető Android felület. |
   | K2 | Sebesség | Alkalmazás gyorsan fut. |

## 11 Fogalomszótár

(+): Az összeadás segítségével, két számból összeget képezünk.\
(-): A kivonás művelete során kivonjuk az egyik számot a másik számból.\
(x): A szorzás vagy sokszorozás, a számtani alapműveletek egyike. Ha a és b pozitív egész számokat jelentenek, akkor b-t megszorozni a-val annyit tesz, mint alkotni egy összeget, amelyet röviden ab-vel szokás megjelölni. A b számot, amelyet ezen összeg előállítása végett a-szor tettünk összeadandónak, sokszorozandónak vagy szorzandónak, az a számot sokszorozónak vagy szorzónak, az eredményül nyert összeget pedig szorzatnak nevezzük.\
(/): Az osztás a számtani alapműveletek egyike. A szorzás megfordítása. Ha c*b=a és b!=0 akkor a-t b-vel osztva visszakapjuk c-t.
