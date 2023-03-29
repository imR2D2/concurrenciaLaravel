<template>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Roles</h6>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="role in rolesTable" :key="role.id">
                        <td>{{role.id}}</td>
                        <td>{{role.name}}</td>
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
            <input type="text" name="role" class="form-control" v-model="role"> 
            <button class="btn btn-success" @click="addElement" type="button">Guardar </button>
        </div>
    </div>
</div>
</template>
<script>
    export default {
        //Se manejan desde afuera
        props:{
            roles:{
                type:[Object, Array],
                required:true
            }
        },
        //Variables que se manejan dentro de vue
        data(){
            return{
                role: '',
                rolesTable : this.roles,                
            }
        },
        //Aqui se renderizan funciones
        methods: {
            addElement(){
                let count = this.rolesTable.length +1;
            //Crear formData para enviar formularios    
                var formdata = new FormData();
                formdata.append('name', this.role);
                
            //Libreria para hacer llamadas Async
                axios.post('crear-roles', formdata)
                .then(response => {
                    console.log(response);
                })
                .catch(error => {
                    console.log(error);
                });
                this.roles.push({'id': count, 'name':this.role});
            }
        },
    }
</script>