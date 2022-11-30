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
