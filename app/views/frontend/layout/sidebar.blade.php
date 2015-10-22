			<div class="col-md-4">
				<!-- Latest Posts -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Başlıklar</h4>
					</div>
					<ul class="list-group">
                                            @foreach($titles as $title)
						<li class="list-group-item"><a href="singlepost.html">{{$title->content}}</a></li>
                                                @endforeach
						
					</ul>
				</div>

			</div>