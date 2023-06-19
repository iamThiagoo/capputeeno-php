//
const masksOptions = {
    cpf: {
        mask: '^(\\d{3}\\.?\\d{3}\\.?\\d{3}-?\\d{2})$'
    },
    birthdate: {
        mask: Date,
        min: new Date(1990, 0, 1),
        max: new Date(2020, 0, 1),
        lazy: false
    }
};

let cpfInputs = document.querySelectorAll('.cpf');
for(const cpfInput of cpfInputs)
{
    new IMask(cpfInput, masksOptions.cpf);
}

let birthdateInputs = document.querySelectorAll('.birthdate');
for(const birthdateInput of birthdateInputs)
{
    new IMask(birthdateInput, masksOptions.birthdate);
}


//
let passwordConfirmationInputs = document.querySelectorAll("input[name=password_confirmation]");

if (passwordConfirmationInputs) {
    for(const passwordConfirmationInput of passwordConfirmationInputs)
    {
        let passwordInput = document.querySelectorAll("input[name=password]");

        passwordInput[0].addEventListener('keyup', () => {
            let submitButton = document.querySelector('button[type=submit]');

            if(passwordInput[0].value !== passwordConfirmationInput.value) {
                submitButton.setAttribute('disabled', true);
                submitButton.classList.add('opacity-90');

                passwordConfirmationInput.classList.remove('ring-green-500');
                passwordConfirmationInput.classList.add('ring-red-500');
                passwordConfirmationInput.classList.add('focus:ring-red-600');

            } else {
                submitButton.setAttribute('disabled', false);
                submitButton.classList.remove('opacity-90');

                passwordConfirmationInput.classList.remove('ring-red-500');
                passwordConfirmationInput.classList.add('ring-green-500');
                passwordConfirmationInput.classList.add('focus:ring-green-600');

            }
        });
        
        passwordConfirmationInput.addEventListener('keyup', () => {
            let submitButton = document.querySelector('button[type=submit]');

            if(passwordInput[0].value !== passwordConfirmationInput.value) {
                submitButton.setAttribute('disabled', true);
                submitButton.classList.add('opacity-90');

                passwordConfirmationInput.classList.remove('ring-green-500');
                passwordConfirmationInput.classList.add('ring-red-500');
                passwordConfirmationInput.classList.add('focus:ring-red-600');

            } else {
                submitButton.setAttribute('disabled', false);
                submitButton.classList.remove('opacity-90');

                passwordConfirmationInput.classList.remove('ring-red-500');
                passwordConfirmationInput.classList.add('ring-green-500');
                passwordConfirmationInput.classList.add('focus:ring-green-600');

            }
        });
    }
    
}


//
let selectsState = document.querySelectorAll("select[name=state]");

if (selectsState) 
{
    selectsState.forEach(selectState => {
        selectState.addEventListener('change', (event) => {
            let state = event.target.value;

            fetch('/State/getCitiesJson?state=' + state, {
                method: 'GET'
            })
            .then(response => response.json())
            .then(cities => {
                selectsCity = document.querySelectorAll("select[name=city]");

                selectsCity.forEach(selectCity => {
                    selectCity.style.innerHTML = "";

                    cities.forEach( (city) => {
                        cityOption = createCityOption(city);
                        selectCity.appendChild(cityOption);
                    });
                });
            })
            .catch(error => console.error('Erro:', error));
        });
    });
}

function createCityOption (city) 
{
    let option = document.createElement('option');

    option.value = city.id;
    option.innerText = city.name;

    return option;
}