<template>
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Usuarios</h6>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in usuarioTable" :key="user.id">
                            <td>{{user.id}}</td>
                            <td>{{user.name}}</td>
                            <td>{{user.email}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>     
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
                <input type="text" name="user" class="form-control" v-model="user"> 
                <input type="text" name="email" class="form-control" v-model="email"> 
                <input type="text" name="password" class="form-control" v-model="password"> 
                <button class="btn btn-success" @click="addElement" type="button">Guardar </button>
            </div>
        </div>
    </div>
    </template>
    <script>
        export default {
            //Se manejan desde afuera
            props:{
                users:{
                    type:[Object, Array],
                    required:true
                }
            },
            //Variables que se manejan dentro de vue
            data(){
                return{
                    user: '',
                    email:'',
                    password: '',
                    usuarioTable : this.users,                
                }
            },
            //Aqui se renderizan funciones
            methods: {
                addElement(){
                    let count = this.usuarioTable.length +1;
                //Crear formData para enviar formularios    
                    var formdata = new FormData();
                    formdata.append('name', this.user);
                    formdata.append('email', this.email);
                    formdata.append('password', this.password);
                    
                //Libreria para hacer llamadas Async
                    axios.post('crear-usuario', formdata)
                    .then(response => {
                        console.log(response);
                    })
                    .catch(error => {
                        console.log(error);
                    });
                    this.user.push({'id': count, 'name':this.user});
                    this.user.push({'id': count, 'email':this.user});
                    this.user.push({'id': count, 'password':this.user});
                }
            },
        }
    </script>