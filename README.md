# Opis projektu
Projekt został zrealizowany w formie motywu do Wordpressa. Użyte przeze mnie narzędzia do realizacji zadania to m.in: gulp, sass, bootstrap.

Motyw posiada wsparcie dla loga oraz 4 pozycji menu definiowanych prosto z Wordpressa.

# Dodatkowe pytania
 1. Czego użyć w WordPress do formularza kontaktowego?
   
2.  Czego użyć gdybyśmy chcieli pozwolić klientowi wpływać na treści tej strony z poziomu panelu administratora?
    
3.  Jak zrobić żeby w szablonie pojawiło się menu zdefiniowane w WordPress a nie bezpośrednio w kodzie przez programistę?
    
4.  Ile zajęło Ci wdrożenie tego projektu? Podaj prawdziwą wartość, jesteśmy programistami, wiemy ile to może potencjalnie zająć, wiemy, że czasami można się na czymś zablokować, pisz szczerze :)

odp. 1 - Do formularza kontaktowego można wykorzystać m.in. plugin Contact Form 7 lub skorzystać z API Wordpressa i spróbować napisać coś samodzielnie :)

odp. 2 - Tak właściwie to zależy od tego co dokładnie chcielibyśmy udostępnić. Możliwości jest wiele m.in: 

 - Settings API - pozwala m.in. na stworzenie własnych ustawień dla motywu,
 - Block API - niektóre elementy strony można "pokroić" na bloki, aby następnie udostępnić je w panelu administracyjnym,
 - Wykorzystanie wtyczki - może to być np. ACF. Dzięki tej wtyczce jesteśmy w stanie dodawać odpowiednie pola w edycji strony. Wartości pól wpisanych przez administratora strony jesteśmy w stanie wyświetlić w odpowiednim dla nas miejscu.

odp. 3 - W pierwszej kolejności należy użyć funkcji register_nav_menu, aby dodać wspierane lokalizacje przez nasz motyw. Kolejnym krokiem jest wykonanie funkcji wp_nav_menu w szablonie z odpowiednimi parametrami, aby wyświetlić dane menu na stronie.

odp. 4 - Całkowity czas potrzebny na stworzenie projektu wraz z konfiguracją gulpa to ok. 7h.
