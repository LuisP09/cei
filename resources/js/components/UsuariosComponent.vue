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
                                <button type="button" class="btn btn-sm btn-dark me-md-2" @click="fnNuevoLibro()" id="nuevoLibro">
                                    Nuevo
                                </button>
                                <button type="button" class="btn btn-sm btn-dark me-md-2" @click="listar_libros()">
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
                                             <button class="dropdown-item" >
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
                                                <button class="dropdown-item" >
                                                <span class="btn-inner--icon"><i class="ni ni-collection"></i></span>
                                                <span class="btn-inner--text">Editar</span>
                                                </button>
                                                <button class="dropdown-item" >
                                                <span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span>
                                                <span class="btn-inner--text">Eliminar</span>
                                                </button>
                                                <button class="dropdown-item" @click="fnAgregarLibro(libro)">
                                                <span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span>
                                                <span class="btn-inner--text">Eliminar</span>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown link
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
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
        <!-- Page content -->

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
        };
    },
    methods: {
        async listar_usuarios() {
            await axios.get("api/usuarios").then((respuesta) => {
                    console.log(respuesta.data);
                    this.lista_usuarios = respuesta.data;
                })
                .catch((error) => {
                    console.log(error.response.data);
                });
        },
        fnEditarLibro(usuario) {
            this.nuevoUsuario = usuario;
            $("#modalNuevoLibro").modal("toggle");
        },
    },
    
    
};

</script>
