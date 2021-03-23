    
	
	public class Pessoa {

        private int id;
        private string nome;
        private string cpf;
        private string rg;
		
		public void setId(int id){
			this.id = id;
		}
		public void setNome(String nome){
			this.nome = nome;
		}
		public void setCpf(String cpf){
			this.cpf = cpf;
		}
		public void setRg(String rg){
			this.rg = rg;
		}
		public void getId(){
			return this.id;
		}
		public void getNome(){
			return this.nome;
		}
		public void getCpf(){
			return this.cpf;
		}
		public void getRg(){
			return this.rg;
		}

        public consultaPessoa(int id)
        {
            this.id = id;
        }

        public consultaPessoa(int id, string nome)
        {
            this.id = id;
            this.nome = nome;
        }

    }


    public class Cliente: Pessoa{
        consultaPessoaPorId(3);
    }

    public class ClassName: Pessoa
    {
        private string login;
        private string senha;

        consultaPessoaPorId(4, "João");
    
        public void setLogin(String login){
            this.login = login;
        }
        public void setSenha(String senha){
            this.senha = senha;
        }
        public void getLogin(){
            return this.login;
        }
        public void getSenha(){
            return this.senha;
        }
    }
    

