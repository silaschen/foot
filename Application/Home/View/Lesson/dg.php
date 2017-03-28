<div class="row">
	<form action="__APP__/home/lesson/dg" method="post">
		<select>
		<foreach name="menu" item="vo">
  				<option>	{$vo.catename}</option>
  						
  					<foreach name="vo.children" item="children">
  						<option>	{$children.catename}</option>
  						</foreach>

  			</foreach>
</select>
			





	</form>





</div>