<?php
interface Acoes {
    /* Esses métodos deverão ser utilizados para declarar ataques personalizados posteriormente,
    por isso, são abstratos, pois cada símio possui ataques diferentes */
    public function Ataque1();
    public function Ataque2();
    public function Ataque3();
    public function Ataque4();
}