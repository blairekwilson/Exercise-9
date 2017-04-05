<?php 

/**
 * Echos coffee incredient.
 *
 * @param Type of coffee
 */

function makeBeer($type) {
  if ($type == 'ipa') {
    echo '<p>A type of copper-colored beer similar to bitter, typically with a higher than average alcohol and hop content (my personal favorite)</p>';
  } else if ($type == 'stout') {
    echo '<p>A dark beer made using roasted malt or roasted barley, hops, water and yeast. Stouts were traditionally the generic term for the strongest or stoutest porters, typically 7% or 8%, produced by a brewery.</p>';
  } else if ($type == 'pilsner') {
    echo '<p>A type of pale lager which accounts for more than two-thirds of the beer produced in the world.</p>';
  } else if ($type == 'sour') {
    echo '<p>A beer which has an intentionally acidic, tart or sour taste. The most common sour beer styles are Belgian: lambics, gueuze and Flanders red ale.</p>';
  } else {
    echo '<p>That&rsquo;s not a real beer!  Nice try, though :D</p>';

  }
}