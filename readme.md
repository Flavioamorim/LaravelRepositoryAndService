

Ex de repository e Service no Laravel
-------------------------------------


**Primeira ação, instalar essa maravilhosa lib:**
https://github.com/andersao/l5-repository

após a instalação do mesmo, a lib irá disponibilizar vários comandas no artisan, para ver basta :

     php artisan

Nesse projeto, é criado uma repository através dos comandos abaixo

> php artisan make:entity , irá criar o model na pasta entities e irá
> perguntar se deseja criar as demais classes, transformes, validators

mas pode usar também

> php artisan make:repository

a diferença é que o php artisan make:entity já registrou o repository criado em : 

> App\Providers\RepositoryServiceProvider::class

em Config/app.php

deve ser importada nos providers o App\Providers\RepositoryServiceProvider::class, pois assim o laravel entedera que quando for instanciado a interface, ele utilizará o repository

Cria uma pasta chamada Service em App, assim o namespace das classes de serviços ficarão fica App\Service;

> O Service vai instanciar a classe repository "use
> App\Repositories\TesteRepository" e retornar o resultado para o
> controller

Assim a classe TesteService ficou com o construtor

>     public function __construct(TesteRepository $repository)
>     {
>         $this->repository = $repository;
>     }

O Service deve conter os mesmos metodos do controller mas com a logica, ex:

>     public function index(){
>     	return $this->repository->all();
>     }

No controller , deve ser instaciado o serviço do mesmo:


ex:

>   use App\Services\TesteService;
>   
>     private $service;
> 
>     public function __construct(TesteService $serviceLogic )
>     {
>         $this->service = $serviceLogic;  
>     }
> 
>     public function index()
>     {
>         $testes = $this->service->index();
>         //return view("paraqualfor");
>     }