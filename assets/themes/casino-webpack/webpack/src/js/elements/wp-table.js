const wp_tables = document.querySelectorAll('.block-table');

if (wp_tables) {
    wp_tables.forEach((wp_table) => {
        const thead_elems = wp_table.querySelectorAll('thead th');
        if (thead_elems) {
            thead_elems.forEach((thead_elem, ind) => {
                if (ind > 0) {
                    thead_elem.addEventListener('click', () => {
                        const elems = wp_table.querySelectorAll('tbody td:nth-child(' + (ind + 1) + ')');
                        const tr = wp_table.querySelectorAll('tbody tr');
                        const tbody = wp_table.querySelector('tbody');

                        let new_tr = [];
                        if (elems) {
                            let digitals = true;
                            let many = false;
                            let percentage = false;
                            elems.forEach((elem) => {
                                if (!elem.innerText.match(/^\d+$/) && digitals){
                                    if (!(elem.innerText === '—' || elem.innerText === '-')) {
                                        digitals = false;
                                    }
                                }
                                if (elem.innerText[0] === '€'){
                                    many = true;
                                }
                                if (elem.innerText.includes('%')) {
                                    percentage = true;
                                }
                            })



                            if (digitals) {
                                let arr = [];
                                elems.forEach((elem, ind) => {
                                    if (elem.innerText === '—' || elem.innerText === '-' ) {
                                        arr.push({ index: ind, value: 0 },)
                                    } else {
                                        arr.push({ index: ind, value: Number(elem.innerText) },)
                                    }
                                })


                                if (thead_elem.classList.contains('active')) {
                                    if (thead_elem.classList.contains('DESC')) {
                                        arr = arr.sort(compareNumbersAsc);
                                    } else {
                                        arr = arr.sort(compareNumbersDesc);
                                    }

                                } else {
                                    arr = arr.sort(compareNumbersDesc);
                                }


                                arr.forEach((err_elem) => {
                                    new_tr.push(tr[err_elem.index]);
                                })

                            } else {
                                if (many) {
                                    // str = str.replace(/[^.0-9]/g,"")
                                    let arr = [];
                                    elems.forEach((elem, ind) => {
                                        arr.push({ index: ind, value: Number(elem.innerText.replace(/[^0-9]/g,"")) },)
                                    })


                                    if (thead_elem.classList.contains('active')) {
                                        if (thead_elem.classList.contains('DESC')) {
                                            arr = arr.sort(compareNumbersAsc);
                                        } else {
                                            arr = arr.sort(compareNumbersDesc);
                                        }

                                    } else {
                                        arr = arr.sort(compareNumbersDesc);
                                    }


                                    arr.forEach((err_elem) => {
                                        new_tr.push(tr[err_elem.index]);
                                    })

                                } else {
                                    if (percentage) {
                                        let arr = [];
                                        elems.forEach((elem, ind) => {
                                            if (elem.innerText === '—' || elem.innerText === '-' ) {
                                                arr.push({ index: ind, value: 0 },)
                                            } else {
                                                arr.push({ index: ind, value: Number(elem.innerText.replace(/[^.0-9]/g,"")) },)
                                            }
                                        })


                                        if (thead_elem.classList.contains('active')) {
                                            if (thead_elem.classList.contains('DESC')) {
                                                arr = arr.sort(compareNumbersAsc);
                                            } else {
                                                arr = arr.sort(compareNumbersDesc);
                                            }

                                        } else {
                                            arr = arr.sort(compareNumbersDesc);
                                        }


                                        arr.forEach((err_elem) => {
                                            new_tr.push(tr[err_elem.index]);
                                        })
                                    } else {
                                        let arr = [];
                                        elems.forEach((elem, ind) => {
                                            arr.push({ index: ind, value: elem.innerText.toUpperCase() },)
                                        })

                                        if (thead_elem.classList.contains('active')) {
                                            if (thead_elem.classList.contains('DESC')) {
                                                arr = sortTextAsc(arr, many)
                                            } else {
                                                arr = sortTextDesc(arr, many)
                                            }
                                        } else {
                                            arr = sortTextDesc(arr, many)
                                        }

                                        arr.forEach((err_elem) => {
                                            new_tr.push(tr[err_elem.index]);
                                        })
                                    }
                                }
                            }

                        }

                        tbody.innerHTML = "";

                        new_tr.forEach((tr_elem) => {
                            tbody.innerHTML =  tbody.innerHTML + tr_elem.innerHTML;
                        })

                        if (!thead_elem.classList.contains('active')) {
                            const thead_elems_active = wp_table.querySelectorAll('thead th.active');

                            if (thead_elems_active) {
                                thead_elems_active.forEach((thead_elem_active) => {
                                    thead_elem_active.classList.remove('active');
                                    thead_elem_active.classList.remove('ASC');
                                    thead_elem_active.classList.remove('DESC');
                                })
                            }

                            thead_elem.classList.add('active')
                            thead_elem.classList.add('DESC');
                        } else {
                            if (thead_elem.classList.contains('DESC')) {
                                thead_elem.classList.remove('DESC')
                                thead_elem.classList.add('ASC')
                            } else {
                                thead_elem.classList.add('DESC')
                                thead_elem.classList.remove('ASC')
                            }
                        }

                    })

                }

            })
        }
    })
}

function compareNumbersDesc(a, b) {
    return b.value - a.value;
}

function compareNumbersAsc(a, b) {
    return a.value - b.value;
}

function sortTextDesc(arr, many) {
    if (many) {
        return arr.sort((a, b) => a.value > b.value ? -1 : 1);
    } else {
        return arr.sort((a, b) => a.value > b.value ? 1 : -1);
    }
}

function sortTextAsc(arr, many) {
    if (many) {
        return arr.sort((a, b) => a.value > b.value ? 1 : -1);
    } else {
        return arr.sort((a, b) => a.value > b.value ? -1 : 1);
    }
}

$(document).ready(function() {
    $(".block-table.full-size").after('<div class="after-table-full-size"></div>');
    $('.after-table-full-size').height($(".block-table.full-size").height() + 40).css('top', '-' + ($(".block-table.full-size").height() + 55) + 'px').css('margin-bottom', '-' + ($(".block-table.full-size").height() + 55) + 'px')
});
