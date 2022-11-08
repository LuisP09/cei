<template>
    <div class="row mt-4 mx-4">
        <!-- Page content -->  
        <div class="col-12">
            <!--
            <div class="alert alert-neutral alert-dismissible fade show" role="alert">
                <--Botones principales->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-sm btn-dark me-md-2" @click="fnNuevoLibro()" id="nuevoLibro">
                        Nuevo
                    </button>
                    <button type="button" class="btn btn-sm btn-dark me-md-2" @click="listar_libros()">
                        Recargar
                    </button>
                </div>
                <--End Botones principales-> 
            </div>-->
            <div class="card mb-4">
                <!--Header-->
                <div class="card-header pb-0">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-between">
                        <h6 ><strong>Tabla de Usuarios</strong></h6>
                            <!--Botones principales-->
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="button" class="btn btn-sm btn-dark me-md-2" @click="fnNuevoUsuario()" id="nuevoUsuario">
                                    Nuevo
                                </button>
                                <button type="button" class="btn btn-sm btn-dark me-md-2" @click="listar_usuarios()">
                                    Recargar
                                </button>
                            </div>
                            <!--End Botones principales--> 
                     </div>
                </div>   
                <!--End Header--> 
                <!-- Tabla principal -->            
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0 table-flush">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >
                                        Usuario
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Apellido
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Correo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Acción
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="users in lista_usuarios" :key="users.id">
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                 <span class="name mb-0 text-sm">{{ users.id }}
                                                    <img src="" class="avatar me-3" alt="image"/>
                                                 </span>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">
                                                     {{ users.username }}
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">
                                             {{ users.firstname }}
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">
                                             {{ users.email }}
                                        </p>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <button class="dropdown-item" @click="fnEditarUsuario(users)">
                                                <span class="btn-inner--icon"><i class="ni ni-collection"></i></span>
                                                <span class="btn-inner--text">Editar</span>
                                            </button>
                                            <button class="dropdown-item" >
                                                <span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span>
                                                <span class="btn-inner--text">Eliminar</span>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" >
                                                <button class="dropdown-item" @click="fnEditarUsuario(users)">
                                                    <span class="btn-inner--icon"><i class="ni ni-collection"></i></span>
                                                    <span class="btn-inner--text">Editar</span>
                                                </button>
                                                <button class="dropdown-item" >
                                                    <span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span>
                                                    <span class="btn-inner--text">Eliminar</span>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Acciones
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#" @click="fnEditarUsuario(users)">Editar</a></li>
                                                <li><a class="dropdown-item" href="#">Eliminar</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Tabla principal -->  
            </div>
        </div>
        <!-- End Page content -->
        <!-- Modal Nuevo Usuario -->
        <div class="modal fade" id="modalNuevoUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Usuario</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form >
                           <!--  <div class="row">
                                <div class="col-md-6">
                                    <img :src="'/storage/' + nuevoLibro.url_imagen" width="120px">
                                </div>
                                <div class="col-md-6">
                                    <input type="file" @change="obtenerImagen">
                                </div>
                            </div> -->
                            
                            <div class="row">
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ISBN del libro</label>
                                        <input type="text" class="form-control" v-model="nuevoUsuario.id" placeholder="ISBN de Libro"/>
                                    </div>
                                </div>
 -->
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre de Usuario</label>
                                    <input type="text" class="form-control" v-model="nuevoUsuario.username" placeholder="Nombre de Usuario"/>
                                </div>
                                </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" v-model="nuevoUsuario.firstname" placeholder="Nombre"/>
                                </div>
                                </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                    <label>Apellido</label>
                                    <input type="text" class="form-control" v-model="nuevoUsuario.lastname" placeholder="Apellido"/>
                                </div>
                                </div>

                                <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Descripción del libro</label>
                                    <input type="text" class="form-control" v-model="nuevoUsuario.email" placeholder="Descripción del Libro" />
                                </div>
                                </div> -->
<!--
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label>Precio del libro</label>
                                    <input type="text" class="form-control" v-model="nuevoLibro.precio" placeholder="Precio del Libro" />
                                </div>
                                </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                    <label>Categoria</label>
                                    <select class="form-control" v-model="nuevoLibro.id_categoria" >
                                    <option v-for="categoria in lista_categorias" :key="categoria.id" v-bind:value="categoria.id" >
                                        {{ categoria.nombre }}
                                    </option>
                                    </select>
                                </div>
                                </div>

                                
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label>Autor</label>
                                    <select class="form-control" v-model="nuevoLibro.id_autor" >
                                    <option v-for="autor in lista_autores" :key="autor.id" v-bind:value="autor.id" >
                                        {{ autor.nombre }}
                                    </option>
                                    </select>
                                </div>
                                </div>

                                
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label>Editorial</label>
                                    <select class="form-control" v-model="nuevoLibro.id_editorial" >
                                    <option v-for="editorial in lista_editoriales" :key="editorial.id" v-bind:value="editorial.id" >
                                        {{ editorial.nombre }}
                                    </option>
                                    </select>
                                </div>
                                </div>
-->
                                <div class="col-md-12" v-if="errores">
                                <div class="alert alert-warning" role="alert">
                                    <span class="alert-inner--icon" ><i class="ni ni-like-2"></i ></span>
                                    <span class="alert-inner--text" ><strong>Warning!</strong> {{ errores }}</span>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cerrar
                        </button>
                        <button type="button" class="btn btn-primary" @click="guardar()">
                        Guardar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Nuevo Usuario -->
    </div>
</template>
<script>
export default {
    setup() {},
    mounted() {
        this.listar_usuarios();
    },
    data() {
        return {
            lista_usuarios: {},
            nuevoUsuario:{},
            errores:"",
        };
    },
    methods: {
        fnNuevoUsuario() {
            this.nuevoUsuario = {};
            $("#modalNuevoUsuario").modal("toggle");
        },
        async listar_usuarios() {
            await axios.get("api/usuarios").then((respuesta) => {
                    console.log(respuesta.data);
                    this.lista_usuarios = respuesta.data;
                })
                .catch((error) => {
                    console.log(error.response.data);
                });
        },
        fnEditarUsuario(usuario) {
            this.nuevoUsuario = usuario;
            $("#modalNuevoUsuario").modal("toggle");
        },
        async guardar() {
            const datos_usuario = new FormData;
            if(!this.nuevoUsuario.id){
                datos_usuario.set('id', 0); 
                datos_usuario.set('username', this.nuevoUsuario.username);
                datos_usuario.set('firstname', this.nuevoUsuario.firstname);
                datos_usuario.set('lastname', this.nuevoUsuario.lastname);
            }else{
                datos_usuario.set('id', this.nuevoUsuario.id);
                datos_usuario.set('username', this.nuevoUsuario.username);
                datos_usuario.set('firstname', this.nuevoUsuario.firstname);
                datos_usuario.set('lastname', this.nuevoUsuario.lastname);
            }
            await axios.post("api/guardar_usuario", datos_usuario).then((respuesta) => {
                console.log(respuesta);
                $("#modalNuevoUsuario").modal("toggle");
                this.nuevoUsuario = {};
                this.errores = "";
                this.listar_usuarios();
                })
                .catch((error) => {
                console.log(error.response.data);

                if (error.response.data.errors != null) {
                    var llaves = Object.keys(error.response.data.errors)
                    this.errores = error.response.data.errors[llaves[0]][0]
                } else {
                    this.errores = error.message;
                }
                });
        },
    },
    
    
};

</script>
