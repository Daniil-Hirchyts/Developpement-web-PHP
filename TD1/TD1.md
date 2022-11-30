# TD 1

---

#### Utilisation "" et ''

```php
echo "Bonjour\n " . $prenom;
echo "Bonjour\n $prenom";
echo 'Bonjour\n $prenom';
```

`'Ne marche pas avec les variables $`

`print_r`

`var_dump`

Pour les tableaux indexes par les char

```php
foreach ($utilisateur as $key => $value) {
    echo $key . ' : ' . $value . '<br>';
}
```

Pour les tableaux indexes par les entriers

```php
for ($i = 0; $i < count($utilisateur); $i++) {
    echo $utilisateur[$i] . '<br>';
}
```

```php
for ($i = 0; $i < count(array_keys($utilisateur)); $i++) {
    $cle = array_keys($utilisateur)[$i];
    $valeur = $utilisateur[$cle];
    //commandes
}
```



Notez les **différences avec Java** :

  * Pour accéder à un attribut ou une fonction d’un objet, on utilise le `->`
au lieu du `.` de Java.

* En PHP, `$this` est obligatoire pour accéder aux attributs et méthodes d’un objet.
* On doit mettre le mot-clé `function` avant de déclarer une méthode
* Le constructeur ne porte pas le nom de la classe, mais s’appelle
  `__construct()`.
* En PHP, on ne peut pas avoir deux fonctions avec le même nom, même si elles
  ont un nombre d’arguments différent. En particulier, il ne peut y avoir au
  maximum qu’un constructeur.
