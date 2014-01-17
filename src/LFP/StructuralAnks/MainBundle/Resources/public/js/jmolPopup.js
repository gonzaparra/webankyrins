/* 
 * Author: Felipe Rodriguez
 * Script that opens a popup to show the pdb info
 * 
 */

function popitup(url) {
        newwindow=window.open(url,'name','height=550,width=900,scrollbars=yes,resizable=yes');
        if (window.focus) {newwindow.focus()}
        return false;
}
