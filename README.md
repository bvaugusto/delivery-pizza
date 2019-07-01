#Delivery Pizza

###Bootstrap

cp .env.example .env

composer install && composer update && php artisan key:generate


##Cliente

| GET|HEAD  | api/v1/cliente                                  | cliente.index            |

| POST      | api/v1/cliente                                  | cliente.store            |

| PUT|PATCH | api/v1/cliente/{cliente}                        | cliente.update           |

| DELETE    | api/v1/cliente/{cliente}                        | cliente.destroy          |

| GET|HEAD  | api/v1/cliente/{cliente}/edit                   | cliente.edit             |

##Endereço de entrega

| GET|HEAD  | api/v1/endereco-entrega                         | endereco-entrega.index   |

| POST      | api/v1/endereco-entrega                         | endereco-entrega.store   |

| DELETE    | api/v1/endereco-entrega/{endereco_entrega}      | endereco-entrega.destroy |

| PUT|PATCH | api/v1/endereco-entrega/{endereco_entrega}      | endereco-entrega.update  |

| GET|HEAD  | api/v1/endereco-entrega/{endereco_entrega}/edit | endereco-entrega.edit    |

#Item Pedido

| GET|HEAD  | api/v1/item-pedido                              | item-pedido.index        |

| POST      | api/v1/item-pedido                              | item-pedido.store        |

| DELETE    | api/v1/item-pedido/{item_pedido}                | item-pedido.destroy      |

| PUT|PATCH | api/v1/item-pedido/{item_pedido}                | item-pedido.update       |

| GET|HEAD  | api/v1/item-pedido/{item_pedido}/edit           | item-pedido.edit         |

##Pedido

| GET|HEAD  | api/v1/pedido                                   | pedido.index             |

| POST      | api/v1/pedido                                   | pedido.store             |

| GET|HEAD  | api/v1/pedido/{pedido}                          | pedido.show              |

| DELETE    | api/v1/pedido/{pedido}                          | pedido.destroy           |

| PUT|PATCH | api/v1/pedido/{pedido}                          | pedido.update            |

| GET|HEAD  | api/v1/pedido/{pedido}/edit                     | pedido.edit              |

| GET|HEAD  | api/v1/pizza                                    | pizza.index              |

| POST      | api/v1/pizza                                    | pizza.store              |

| PUT|PATCH | api/v1/pizza/{pizza}                            | pizza.update             |

| DELETE    | api/v1/pizza/{pizza}                            | pizza.destroy            |

| GET|HEAD  | api/v1/pizza/{pizza}/edit                       | pizza.edit               |