//www.lsauer.com 2012 CC-BY-SA 3
//see: http://www.lsauer.com/2012/05/sequence-viewer-fasta-to-gff.html
function zeroFill( number, width )
{
  width -= number.toString().length;
  if ( width > 0 )
  {
    return new Array( width + (/\./.test( number ) ? 2 : 1) ).join( '&nbsp;' ) + number;
  }
  return number + ""; // always return a string
}

function seq2gff(seq, el){

    this.seq = seq.toUpperCase();
    this.formattedSequence = this.seq.split(/(.{10})/gm).filter(Boolean).map( function(e,i,a){ var pos=(i*10)+1;return (!(i%4)?'<br />'+' '.slice(0,4-(''+pos).length)+(zeroFill(pos,4))+' '+e:e)}).join(' ');
    document.getElementById('sequence').innerHTML = this.formattedSequence;
    
}