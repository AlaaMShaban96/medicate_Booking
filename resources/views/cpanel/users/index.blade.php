@include('cpanel.layout.navbar') 

<div class="content">
    <div class="container-fluid">
        <div class="page-title">
            <h3>Users 
                <a href="roles.html" class="btn btn-sm btn-outline-primary float-right"><i class="fas fa-user-shield"></i> Roles</a>
            </h3>
        </div>
        <div class="box box-primary">
            <div class="box-body">
                <table width="100%" class="table table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)

                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->state==0? "not Active ":" Active "}}</td>
                                
                                <td class="text-right">
                                    <a href="{{url("/cpanel/user/$user->id/location")}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                            width="48" height="48"
                                            viewBox="0 0 172 172"
                                            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M86,147.06c-33.72251,0 -61.06,-27.33749 -61.06,-61.06v0c0,-33.72251 27.33749,-61.06 61.06,-61.06v0c33.72251,0 61.06,27.33749 61.06,61.06v0c0,33.72251 -27.33749,61.06 -61.06,61.06z" fill="#cccccc"></path><g><path d="M40.28906,88.65017c0,0 20.35532,-27.88375 45.46862,-27.88375c25.11331,0 45.44842,27.88375 45.44842,27.88375c0,0 -20.33259,27.67666 -45.44842,27.67666c-25.11583,0 -45.46862,-27.67666 -45.46862,-27.67666z" fill="#ffffff"></path><path d="M85.75768,60.76642c25.11583,0 45.44842,27.88375 45.44842,27.88375c0,0 -20.33259,27.67666 -45.44842,27.67666c-25.11583,0 -45.46862,-27.67666 -45.46862,-27.67666c0,0 20.35279,-27.88375 45.46862,-27.88375M85.75768,55.71548c-27.36603,0 -48.65577,28.73231 -49.54979,29.95716l-2.18201,2.99016l2.19211,2.98006c0.89402,1.21475 22.18376,29.73492 49.53969,29.73492c27.35845,0 48.62546,-28.5227 49.51696,-29.73492l2.18959,-2.98006l-2.17696,-2.98763c-0.89402,-1.22485 -22.16103,-29.95969 -49.52958,-29.95969z" fill="#cfd8dc"></path><path d="M63.03095,88.53148c0,-12.55413 10.18776,-22.71411 22.72926,-22.71411c12.54655,0 22.72926,10.15998 22.72926,22.71411c0,12.56928 -10.18271,22.74441 -22.72926,22.74441c-12.54403,0 -22.72926,-10.17513 -22.72926,-22.74441z" fill="#00acc1"></path><path d="M75.65831,88.54411c0,-5.58887 4.5105,-10.09937 10.10189,-10.09937c5.56614,0 10.10189,4.5105 10.10189,10.09937c0,5.60655 -4.53575,10.10442 -10.10189,10.10442c-5.5914,0 -10.10189,-4.49787 -10.10189,-10.10442z" fill="#006064"></path><path d="M40.3623,88.54663c1.32335,-1.76783 21.13569,-27.67919 45.39538,-27.67919c24.25717,0 44.04931,25.90883 45.37265,27.67666l12.51877,0.00253l-4.29078,-5.86415c-0.95715,-1.30567 -23.70662,-31.91693 -53.60065,-31.91693c-29.89403,0 -52.6637,30.60874 -53.61832,31.91188l-4.30088,5.8692z" fill="#90a4ae"></path></g></g></svg>
                                    </a>
                                    <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                    <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            
                        @endforeach
                       
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('cpanel.layout.footer') 