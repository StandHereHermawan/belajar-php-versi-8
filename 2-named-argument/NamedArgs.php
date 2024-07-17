<?php

require_once __DIR__ . "/util/Function.php";

# Without Named Argument
sayHello("Arief", "Karditya", "Hermawan");

# Named Argument
sayHello(firstName: "Arief", lastName: "Hermawan", middleName: "Karditya");
sayHello(lastName: "Hermawan", firstName: "Arief", middleName: "Karditya");
sayHello(middleName: "Karditya", lastName: "Hermawan", firstName: "Arief");

# Named Argument Default Value.
sayHelloDefaultValue(firstName: "Terry", lastName: "Davis");
sayHelloDefaultValue("Andrew", lastName: "Davis");
