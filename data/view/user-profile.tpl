<div class="container">
	<div class="row">
	  <div class="col-lg-4">
	    <div class="row">
	      <div class="col-lg-12 col-md-6 order-md-1">
	        <div class="card animated fadeInUp animation-delay-7">
	          <div class="ms-hero-bg-primary ms-hero-img-coffee">
	            <h3 class="color-white index-1 text-center no-m pt-4">{$userdata.user_name} {$userdata.user_surname}</h3>
	            <div class="color-medium index-1 text-center np-m">{$userdata.user_alias}</div>
	            <img src="{{$resources_path}}material/img/demo/avatar2.jpg" alt="..." class="img-avatar-circle"> </div>
	          <div class="card-block pt-4 text-center">
	            <h3 class="color-primary">Coś o użytkowniku</h3>
	            <p>Tutaj krótki opis. Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates officia repudiandae beatae magni es magnam autem molestias.</p>
	            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook">
	              <i class="zmdi zmdi-facebook"></i>
	            </a>
	            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
	              <i class="zmdi zmdi-twitter"></i>
	            </a>
	            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram">
	              <i class="zmdi zmdi-instagram"></i>
	            </a>
	          </div>
	        </div>
	      </div>
	      {if $user_data.user_id == $userdata.user_id}
      	<div class="col-lg-12 col-md-12 order-md-3 order-lg-2">
        <a href="{$base_site}/profil/edytuj" class="btn btn-primary btn-raised btn-block animated fadeInUp animation-delay-12">
          <i class="zmdi zmdi-edit"></i>
          Edytuj profil
        </a>
        
	      </div>
	      {/if}
	     {*   *}
	      <div class="col-lg-12 col-md-6 order-md-2 order-lg-3">
	        <div class="card animated fadeInUp animation-delay-12">
	          <div class="ms-hero-bg-royal ms-hero-img-mountain">
	            <h3 class="color-white index-1 text-center pb-4 pt-4">Nadchodzące wydarzenia</h3>
	          </div>
	          <div class="card-block">
	            <div class="ms-media-list">
	              <div class="media mb-2">
	                <a class="mr-3" href="#">
	                  <img class="media-object" src="{{$resources_path}}material/img/demo/avatar6.jpg"> </a>
	                <div class="media-body">
	                  <h4 class="mt-0 mb-0 color-warning">Maria Sharaphova</h4>
	                  <a href="mailto:joe@example.com?subject=feedback">maria.sha@example.com</a>
	                  <div class="">
	                    <a href="javascript:void(0)" class="btn-circle btn-circle-xs no-mr-md btn-facebook">
	                      <i class="zmdi zmdi-facebook"></i>
	                    </a>
	                    <a href="javascript:void(0)" class="btn-circle btn-circle-xs no-mr-md btn-twitter">
	                      <i class="zmdi zmdi-twitter"></i>
	                    </a>
	                    <a href="javascript:void(0)" class="btn-circle btn-circle-xs no-mr-md btn-instagram">
	                      <i class="zmdi zmdi-instagram"></i>
	                    </a>
	                  </div>
	                </div>
	              </div>
	              <div class="media mb-2">
	                <div class="media-left media-middle">
	                  <a class="mr-3" href="#">
	                    <img class="media-object" src="{{$resources_path}}material/img/demo/avatar3.jpg"> </a>
	                </div>
	                <div class="media-body">
	                  <h4 class="mt-0 mb-0 color-warning">Rafael Nadal</h4>
	                  <a href="mailto:joe@example.com?subject=feedback">rafa.nad@example.com</a>
	                  <div class="">
	                    <a href="javascript:void(0)" class="btn-circle btn-circle-xs no-mr-md btn-facebook">
	                      <i class="zmdi zmdi-facebook"></i>
	                    </a>
	                    <a href="javascript:void(0)" class="btn-circle btn-circle-xs no-mr-md btn-twitter">
	                      <i class="zmdi zmdi-twitter"></i>
	                    </a>
	                    <a href="javascript:void(0)" class="btn-circle btn-circle-xs no-mr-md btn-instagram">
	                      <i class="zmdi zmdi-instagram"></i>
	                    </a>
	                  </div>
	                </div>
	              </div>
	              <div class="media mb-2">
	                <div class="media-left media-middle">
	                  <a class="mr-3" href="#">
	                    <img class="media-object" src="{{$resources_path}}material/img/demo/avatar5.jpg"> </a>
	                </div>
	                <div class="media-body">
	                  <h4 class="mt-0 mb-0 color-warning">Roger Federer</h4>
	                  <a href="mailto:joe@example.com?subject=feedback">roger.fef@example.com</a>
	                  <div class="">
	                    <a href="javascript:void(0)" class="btn-circle btn-circle-xs no-mr-md btn-facebook">
	                      <i class="zmdi zmdi-facebook"></i>
	                    </a>
	                    <a href="javascript:void(0)" class="btn-circle btn-circle-xs no-mr-md btn-twitter">
	                      <i class="zmdi zmdi-twitter"></i>
	                    </a>
	                    <a href="javascript:void(0)" class="btn-circle btn-circle-xs no-mr-md btn-instagram">
	                      <i class="zmdi zmdi-instagram"></i>
	                    </a>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="col-lg-8">
	    <div class="row">
	      <div class="col-sm-4">
	        <div class="card card-info card-block text-center wow zoomInUp animation-delay-2">
	          <h2 class="counter color-info">49</h2>
	          <i class="fa fa-4x fa-circle color-info"></i>
	          <p class="mt-2 no-mb lead small-caps color-info">rozegranych spotkań</p>
	        </div>
	      </div>
	      <div class="col-sm-4">
	        <div class="card card-warning card-block text-center wow zoomInUp animation-delay-3">
	          <h2 class="counter">3</h2>
	          <i class="fa fa-4x fa-trophy color-warning"></i>
	          <p class="mt-2 no-mb lead small-caps color-warning">rozegrane turniejów</p>
	        </div>
	      </div>
	      <div class="col-sm-4">
	        <div class="card card-info card-block text-center wow zoomInUp animation-delay-4">
	          <h2 class="counter color-info">46</h2>
	          <i class="fa fa-4x fa-group color-info""></i>
	          <p class="mt-2 no-mb lead small-caps color-info">obserwujących</p>
	        </div>
	      </div>
	    </div>
	    <div class="card card-primary animated fadeInUp animation-delay-12">
	      <div class="card-header">
	        <h3 class="card-title">
	          <i class="zmdi zmdi-account-circle"></i> Informacje</h3>
	      </div>
	      <table class="table table-no-border table-striped">
	        <tr>
	          <th>
	            <i class="zmdi zmdi-account mr-1 color-success"></i> Nazwa użytkownika</th>
	          <td>{$userdata.user_alias} </td>
	        </tr>
	        <tr>
	          <th>
	            <i class="zmdi zmdi-face mr-1 color-warning"></i> Imię i nazwisko</th>
	          <td>{$userdata.user_name} {$userdata.user_surname}</td>
	        </tr>
	        <tr>
	          <th>
	            <i class="zmdi zmdi-calendar mr-1 color-primary"></i>Wiek</th>
	          <td>21 lat</td>
	        </tr>
	        <tr>
	          <th>
	            <i class="zmdi zmdi-email mr-1 color-danger"></i> Email</th>
	          <td>
	            <a href="#">msosnowski1997@gmail.com</a>
	          </td>
	        </tr>
	        <tr>
	          <th>
	            <i class="zmdi zmdi-link mr-1 color-info"></i> Ostatnia aktywność</th>
	          <td>
	            1 dzień temu
	          </td>
	        </tr>
	        <tr>
	          <th>
	            <i class="zmdi zmdi-calendar mr-1 color-royal"></i> Zerejestrowany</th>
	          <td>12/11/2017</td>
	        </tr>
	      </table>
	    </div>
	    <h2 class="color-primary text-center mt-4 mb-2">Ostatnia aktywność</h2>
	    <div class="row">
	      <div class="col-lg-12">
	        <ul class="ms-timeline">
	          <li class="ms-timeline-item wow materialUp">
	            <div class="ms-timeline-date">
	              <time class="timeline-time" datetime="">2016
	                <span>March</span>
	              </time>
	              <i class="ms-timeline-point bg-royal"></i>
	              <img src="{{$resources_path}}material/img/demo/avatar6.jpg" class="ms-timeline-point-img"> </div>
	            <div class="card card-royal">
	              <div class="card-header">
	                <h3 class="card-title">Card Title</h3>
	              </div>
	              <div class="card-block">
	                <div class="row">
	                  <div class="col-sm-4">
	                    <img src="{{$resources_path}}material/img/demo/office1.jpg" alt="" class="img-fluid"> </div>
	                  <div class="col-sm-8">
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, praesentium, quam! Quia fugiat aperiam.</p>
	                    <p>Perspiciatis soluta voluptate dolore officiis libero repellat cupiditate explicabo atque facere aliquam.</p>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </li>
	          <li class="ms-timeline-item wow materialUp">
	            <div class="ms-timeline-date">
	              <time class="timeline-time" datetime="">2015
	                <span>October</span>
	              </time>
	              <i class="ms-timeline-point bg-info"></i>
	            </div>
	            <div class="card card-info">
	              <div class="card-header">
	                <h3 class="card-title">Card Title</h3>
	              </div>
	              <div class="list-group">
	                <a href="javascript:void(0)" class="list-group-item withripple">
	                  <i class="zmdi zmdi-favorite"></i>Cras justo odio
	                  <span class="label label-default pull-right">Active</span>
	                </a>
	                <a href="javascript:void(0)" class="list-group-item withripple">
	                  <i class="zmdi zmdi-cocktail"></i> Dapibus ac facilisis in
	                  <span class="label label-primary pull-right">Other</span>
	                </a>
	                <a href="javascript:void(0)" class="list-group-item withripple active">
	                  <i class="zmdi zmdi-cast"></i>Morbi leo risus
	                  <span class="label label-default pull-right">New</span>
	                </a>
	                <a href="javascript:void(0)" class="list-group-item withripple">
	                  <i class="zmdi zmdi-city"></i>Porta ac consectetur ac
	                  <span class="label label-warning pull-right">Two words</span>
	                </a>
	                <a href="javascript:void(0)" class="list-group-item withripple">
	                  <i class="zmdi zmdi-chart"></i>Vestibulum at eros
	                  <span class="label label-success pull-right">Success</span>
	                </a>
	              </div>
	            </div>
	          </li>
	          <li class="ms-timeline-item wow materialUp">
	            <div class="ms-timeline-date">
	              <time class="timeline-time" datetime="">2015
	                <span>October</span>
	              </time>
	              <i class="ms-timeline-point bg-success"></i>
	            </div>
	            <div class="card card-success-inverse">
	              <div class="card-block"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus officiis autem magni et, nisi eveniet nulla magnam tenetur voluptatem dolore, assumenda delectus error porro animi architecto dolorum quod veniam nesciunt.
	                </div>
	            </div>
	          </li>
	          <li class="ms-timeline-item wow materialUp">
	            <div class="ms-timeline-date">
	              <time class="timeline-time" datetime="">2015
	                <span>February</span>
	              </time>
	              <i class="ms-timeline-point bg-warning"></i>
	              <img src="{{$resources_path}}material/img/demo/avatar2.jpg" class="ms-timeline-point-img"> </div>
	            <div class="card card-warning">
	              <div class="card-header">
	                <h3 class="card-title">Card Title</h3>
	              </div>
	              <div class="card-block">
	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, nulla recusandae blanditiis architecto soluta culpa obcaecati quis earum atque consequuntur.</p>
	                <div class="row">
	                  <div class="col-sm-4">
	                    <img src="{{$resources_path}}material/img/demo/office2.jpg" alt="" class="img-fluid"> </div>
	                  <div class="col-sm-4">
	                    <img src="{{$resources_path}}material/img/demo/office3.jpg" alt="" class="img-fluid"> </div>
	                  <div class="col-sm-4">
	                    <img src="{{$resources_path}}material/img/demo/office4.jpg" alt="" class="img-fluid"> </div>
	                </div>
	                <br>
	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, ipsum voluptates eius placeat dolorum reprehenderit ducimus accusamus magni aspernatur at dolore assumenda quae suscipit enim veritatis obcaecati molestias laudantium
	                  maxime!</p>
	              </div>
	            </div>
	          </li>
	          <li class="ms-timeline-item wow materialUp">
	            <div class="ms-timeline-date">
	              <time class="timeline-time" datetime="">2014
	                <span>July</span>
	              </time>
	              <i class="ms-timeline-point"></i>
	            </div>
	            <div class="card">
	              <blockquote class="blockquote blockquote-color-bg-primary withripple color-white">
	                <p>
	                  <strong>Blockquote in timeline!</strong> consectetur adipiscing elit. Integer sodales sagittis magna. consectetur adipiscing elit sed consequat, quam semper libero.</p>
	                <footer>Someone famous in
	                  <cite title="Source Title">Source Title</cite>
	                </footer>
	              </blockquote>
	            </div>
	          </li>
	          <li class="ms-timeline-item wow materialUp">
	            <div class="ms-timeline-date">
	              <time class="timeline-time" datetime="">2014
	                <span>January</span>
	              </time>
	              <i class="ms-timeline-point bg-info"></i>
	              <img src="{{$resources_path}}material/img/demo/avatar3.jpg" class="ms-timeline-point-img"> </div>
	            <div class="card card-info">
	              <div class="card-header">
	                <h3 class="card-title">Card Title</h3>
	              </div>
	              <div data-type="youtube" data-video-id="9ZfN87gSjvI"></div>
	            </div>
	          </li>
	          <li class="ms-timeline-item wow materialUp">
	            <div class="ms-timeline-date">
	              <time class="timeline-time" datetime="">2013
	                <span>June</span>
	              </time>
	              <i class="ms-timeline-point"></i>
	            </div>
	            <div class="card">
	              <div class="ms-hero-bg-primary ms-hero-img-coffee">
	                <h3 class="color-white index-1 text-center no-m pt-4">Victoria Smith</h3>
	                <div class="color-medium index-1 text-center np-m">@vic_smith</div>
	                <img src="{{$resources_path}}material/img/demo/avatar1.jpg" alt="..." class="img-avatar-circle"> </div>
	              <div class="card-block pt-4 text-center">
	                <h3 class="color-primary">Bio</h3>
	                <p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates officia repudiandae beatae magni es magnam autem molestias.</p>
	                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook">
	                  <i class="zmdi zmdi-facebook"></i>
	                </a>
	                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
	                  <i class="zmdi zmdi-twitter"></i>
	                </a>
	                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram">
	                  <i class="zmdi zmdi-instagram"></i>
	                </a>
	              </div>
	            </div>
	          </li>
	        </ul>
	      </div>
	    </div>
	  </div>
	</div>
</div>