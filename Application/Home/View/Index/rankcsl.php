<ul class="breadcrumb"><li><a href="__APP__">Home</a></li>
<li class="active">积分榜</li>
</ul>
<table class="table table-hover">
	<thead>
		<tr>
			<th>排名</th>
			<th>球队</th>
			<th>场次</th>
			<th>胜</th>
			<th>平</th>
			<th>输</th>
			<th>进球数</th>
			<th>失球数</th>
			<th>净胜球</th>
			<th>积分</th>
		</tr>


	</thead>
	<tbody>
			<?php foreach ($soccer as $value): ?>
					<tr class="info">
							<td>{$value.rank}</td>
							<td>{$value.clubname}</td>
							<td>{$value.matchtime}</td>
							<td>{$value.wintime}</td>
							<td>{$value.ping}</td>
							<td>{$value.defeattime}</td>
							<td>{$value.shotgo}</td>
							<td>{$value.shotoff}</td>
							<td>{$value.directshot}</td>
							<td>{$value.score}</td>
							


					</tr>




			<?php endforeach ?>

	</tbody>

</table>
<div class="panel panel-info">
  <div class="panel-body">
   如有变动，请以足协官方提供数据为准
  </div>
</div>

<h3>中超联赛决定名次办法</h3>
<p>(一)赛季结束时，排名后两位的球队降级；</p>
<p>(二)赛季开始前，积分榜为随机自动生成，真实排名不分先后；</p>
<p>(三)每队胜一场得3分，平一场得1分，负一场得0分；</p>
<p>(四)积分多的名次列前；</p>
<p>(五)中超联赛结束，如两队或两队以上积分相等，依下列顺序排列名次；</p><hr>
<p>a.相互比赛积分多者 <br>
b.相互比赛净胜球多者<br>
c.相互比赛进球数多者<br>
d.其队所属俱乐部的预备队在本赛季预备队联赛中的积分多者，名次列前<br>
f.进球数多者<br>
g.全年比赛红黄牌扣分少者（不包括纪律处罚）<br>
</p>
