@php(the_content())

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse eveniet dolores id voluptate! Cupiditate, inventore veritatis ad quaerat blanditiis ducimus repellat dicta minima aliquam, provident eligendi explicabo. Aperiam, est saepe.</p>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores quibusdam vitae sit, veritatis voluptate cum ratione at eligendi, asperiores voluptas aut dolore tempore eum delectus facilis veniam dolorum corporis? Doloremque.</p>
<ul>
    <li>listitem</li>
    <li>listitem</li>
    <li>listitem</li>
</ul>
</div>
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
