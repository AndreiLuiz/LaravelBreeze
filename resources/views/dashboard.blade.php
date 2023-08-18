<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bem vindo ao cadastro de cliente!') }}
        </h2>
    </x-slot>
    
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form>
			
        </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
					</ul>
				</div>
			</nav>
		</div>
		<div class="row">
			<div class="card mb-3 col-12">
				<div class="card-body">
					<h4 class="card-title">Cadastrar - Clientes</h4>
<br>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome:</label><br>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3"><br>
  <label for="exampleInputPassword1" class="form-label">Telefone:</label><br>
  <input type="text" class="form-control" placeHOLDER="(XX) XXXXX-XXXX" id="exampleInputPassword1">
  </div><br>
  
  <label for="exampleInputPassword1" class="form-label">Origem:</label><br>
  <select id="disabledSelect" class="form-select">
<option>Celular</option>
<option>Telefone Fixo</option>
  </select><br>

  <div class="mb-3"><br>
  <label for="exampleInputPassword1" class="form-label">Data de Nascimento:</label><br>
  <input type="date" class="form-control" id="exampleInputPassword1">
  </div><br>

  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Observações:</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
   
  <br> <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
      
</div>
    </body>
</html>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
