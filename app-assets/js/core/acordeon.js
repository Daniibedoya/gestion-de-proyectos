$(document).ready(start);

function start() {
    $('.objetivos').hide();
    $('.actividades').hide();
    $('.resultados').hide();
    $('.productos').hide();
    $('.indicadores').hide();
    $('.impacto').hide();
    $('.entidad').hide();
    $('.anexos').hide();
    $('.es_actualizacion_modernizacion').hide();
    $('.es_servicios_tecnologicos').hide();
    $('.es_cultura_innovacion').hide();
    $('.info_centro').hide();
    $('.bibliografia').hide();
    $('.mostrar_info_proyecto').off('click').on('click', informacion_proyecto);
    $('.mostrar_objetivos').off('click').on('click', objetivos);
    $('.mostrar_actividades').off('click').on('click', actividades);
    $('.mostrar_resultados').off('click').on('click', resultados);
    $('.mostrar_productos').off('click').on('click', productos);
    $('.mostrar_indicadores').off('click').on('click', indicadores);
    $('.mostrar_impacto').off('click').on('click', impacto);
    $('.mostrar_entidad').off('click').on('click', entidad);
    $('.mostrar_anexos').off('click').on('click', anexos);
    $('.mostrar_es_actualizacion_modernizacion').off('click').on('click', especificacion_actualizacion_modernizacion);
    $('.mostrar_es_servicios_tecnologicos').off('click').on('click', especificacion_servicios_tecnologicos);
    $('.mostrar_es_cultura_innovacion').off('click').on('click', especificacion_cultura_innovacion);
    $('.mostrar_info_centro').off('click').on('click', informacion_centro);
    $('.mostrar_bibliografia').off('click').on('click', bibliografia);
}


function informacion_proyecto() {
    $('.info_proyecto').show();
    $('.objetivos').hide();
}

function objetivos() {
    $('.objetivos').show();
    $('.info_proyecto').hide();
    $('.actividades').hide();
}

function actividades() {
    $('.actividades').show();
    $('.objetivos').hide();
    $('.resultados').hide();
}

function resultados() {
    $('.resultados').show();
    $('.actividades').hide();
    $('.productos').hide();
}

function productos() {
    $('.productos').show();
    $('.resultados').hide();
    $('.indicadores').hide();
}

function indicadores() {
    $('.indicadores').show();
    $('.productos').hide();
    $('.impacto').hide();
}

function impacto() {
    $('.impacto').show();
    $('.indicadores').hide();
    $('.entidad').hide();
}

function entidad() {
    $('.entidad').show();
    $('.impacto').hide();
    $('.anexos').hide();
}

function anexos() {
    $('.anexos').show();
    $('.entidad').hide();
    $('.es_actualizacion_modernizacion').hide();
}
function especificacion_actualizacion_modernizacion() {
    $('.es_actualizacion_modernizacion').show();
    $('.anexos').hide();
    $('.es_servicios_tecnologicos').hide();
}
function especificacion_servicios_tecnologicos() {
    $('.es_servicios_tecnologicos').show();
    $('.es_actualizacion_modernizacion').hide();
    $('.es_cultura_innovacion').hide();
}
function especificacion_cultura_innovacion() {
    $('.es_cultura_innovacion').show();
    $('.es_servicios_tecnologicos').hide();
    $('.info_centro').hide();
}
function informacion_centro() {
    $('.info_centro').show();
    $('.es_cultura_innovacion').hide();
    $('.bibliografia').hide();
}
function bibliografia() {
    $('.bibliografia').show();
    $('.info_centro').hide();
}
