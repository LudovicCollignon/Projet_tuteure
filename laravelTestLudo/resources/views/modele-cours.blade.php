@extends('layout')

@section('contenu')
  <div class="container">

    <!-- titre du cours -->
    <div class="page-header">
      <h1>Cours 1</h1>
    </div>

    <!-- contenu du cours -->
    <div id="cours-contenu">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec nunc eget sapien tincidunt accumsan eu eleifend tellus. Suspendisse tincidunt luctus ullamcorper. Donec nec faucibus dolor. Aliquam sodales cursus sapien, dignissim imperdiet dolor dapibus vitae. Pellentesque non ex convallis, blandit tortor eget, viverra urna. Cras lobortis interdum sapien sit amet malesuada. Maecenas facilisis orci sapien, eget commodo lorem faucibus non. Donec vulputate augue eu dui finibus congue. Cras in justo purus.</p>
      <p>In ut lorem vel eros maximus posuere. Vivamus sollicitudin hendrerit nulla vel lacinia. Fusce lacinia nec massa at venenatis. Sed bibendum tellus pretium convallis pharetra. Maecenas dignissim est sit amet massa varius, egestas tincidunt libero faucibus. Donec mattis malesuada lacinia. Suspendisse a condimentum mauris. Maecenas euismod quis tellus in iaculis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam tempus semper tristique.</p>
      <p>Morbi a dui ante. Sed sit amet feugiat risus. Nullam sollicitudin est a nulla hendrerit lacinia. Ut tristique mauris tellus, ut elementum lectus dapibus non. Nulla facilisi. Morbi maximus sem quis imperdiet vehicula. Suspendisse sagittis, enim a malesuada eleifend, mi magna finibus orci, id pharetra ex tortor non justo.</p>
      <p>Maecenas in fermentum risus. Nulla id cursus dui. Quisque a quam ligula. Sed at neque convallis, volutpat neque sed, consequat turpis. Nulla varius nisi id ex sollicitudin, a efficitur lectus sodales. Vestibulum sit amet fringilla lacus, quis porta leo. Suspendisse sed molestie leo.</p>
      <p>Nullam quis malesuada nulla. Donec finibus enim quis sem gravida, quis finibus diam hendrerit. Nulla cursus, mauris sed vestibulum fermentum, leo metus consectetur lacus, congue luctus risus ipsum sed nulla. Aenean eu ipsum gravida, mollis massa a, sodales urna. Donec quis condimentum risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse ut nibh at elit lobortis elementum at vel ex. Mauris accumsan viverra vehicula. Sed ultricies dolor vitae mi luctus vulputate.</p>
      <p>Proin sed sollicitudin odio. Morbi posuere leo pellentesque, feugiat urna in, pellentesque ipsum. Cras sit amet consequat ipsum, sed tristique nunc. Nulla sed congue ipsum. Curabitur nec pretium mi, id fringilla lacus. Nulla venenatis fringilla nibh nec sagittis. Sed non nunc et dui pretium egestas. Nunc ac elit non metus dignissim ultrices in nec arcu. Duis dignissim laoreet dapibus. Cras sit amet malesuada arcu, id viverra urna. Aliquam commodo sem vel felis posuere, at hendrerit mauris blandit. Proin nisl lorem, efficitur ac pharetra nec, accumsan sed dui. Morbi convallis vitae arcu in suscipit.</p>
    </div>

    <!-- Passer d'un cours à l'autre -->
    <ul id="liste-fleches" class="pager">
      <li class="previous"><a href="modele-cours"><span class="glyphicon glyphicon-arrow-left"></span></a></li>
      <li class="next"><a href="modele-cours"><span class="glyphicon glyphicon-arrow-right"></span></a></li>
    </ul>
  </div>
@endsection
