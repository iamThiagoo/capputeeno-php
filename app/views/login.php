<div class="flex flex-col justify-center min-h-full px-6 pt-16 pb-32 lg:px-8">
	<div class="sm:mx-auto sm:w-full">
		<h2 class="mt-10 text-4xl font-black text-center text-[#5D5D6D] logo"> Capputeeno </h2>
		<h3 class="mt-2.5 text-center text-xl">Já possui cadastro?</h3>
	</div>

	<div class="mt-6 sm:mx-auto sm:w-5/12">
		<form class="space-y-6" action="#" method="POST">
			<div>
				<label for="email" class="block text-sm font-medium leading-6 text-gray-900"> Insira seu Email </label>
				<div class="mt-2">
					<input 
						id="email" 
						name="email" 
						type="email" 
						autocomplete="email" 
						class="block w-full rounded-md border-0 text-sm py-2 px-2.5 text-gray-900 shadow-sm outline-none ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:leading-6"
						required 
					>
				</div>
			</div>

			<div>
				<div class="flex items-center justify-between">
					<label for="password" class="block text-sm font-medium leading-6 text-gray-900"> Insira sua Senha </label>
					<div class="text-sm">
						<a href="#" class="font-semibold text-gray-500 hover:opacity-80">Esqueceu sua senha?</a>
					</div>
				</div>
				<div class="mt-2">
					<input 
						id="password" 
						name="password" 
						type="password" 
						autocomplete="current-password"
						class="block w-full rounded-md border-0 text-sm py-2 px-2.5 text-gray-900 shadow-sm outline-none ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6"
						required
					>
				</div>
			</div>

			<div>
				<button type="submit" class="flex justify-center w-full px-3 py-2.5 text-base hover:opacity-80 font-semibold text-white bg-[#ec7b52] rounded-md shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">
					Entrar
				</button>
			</div>
		</form>
		
		<p class="mt-10 text-sm text-center text-gray-500">
			Não possui uma conta?
			<a href="/Register" class="font-semibold leading-6 text-[#c56542] hover:opacity-80">Cadastre-se</a>
		</p>
	</div>
</div>