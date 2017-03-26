<template>
  <gmap-map
    :center="center"
    :zoom="14"
    :tilt="45"
    style="width: 100%; height: 85%; position: absolute; left:0; bottom:0"
  >
    <gmap-info-window :options="infoOptions" :position="infoWindowPos" :opened="infoWinOpen" :content="infoContent" @closeclick="infoWinOpen=false"></gmap-info-window>
    <gmap-marker
      key="m.id"
      v-for="(m,i) in markers"
      :position="{lat: m.lat, lng: m.lon}"
      :title="m.name"
      :infoText="m.desc"
      :clickable="true"
      :draggable="true"
      @click="toggleInfoWindow(m,i)"
    ></gmap-marker>
  </gmap-map>
</template>

<script>
  import * as VueGoogleMaps from 'vue2-google-maps';
  import Vue from 'vue';

  Vue.use(VueGoogleMaps, {
    load: {
      key: 'AIzaSyCC9wT2sYcgceFWtUy2ioOieliQYmJaNC8',
      // v: 'OPTIONAL VERSION NUMBER',
      // libraries: 'places', //// If you need to use place input
    }
  });

  export default {
    data() {
      return {
        infoContent: '',
        infoWindowPos: {
          lat: 0,
          lng: 0
        },
        infoWinOpen: false,
        currentMidx: null,
        //optional: offset infowindow so it visually sits nicely on top of our marker
        infoOptions: {
          pixelOffset: {
            width: 0,
            height: -35
          }
        }
      }
    },
    props: {
      center: {
        default: function() {
          return {lat: 51.4397894, lng: 5.4734371}
        },
        type: Object
      },
      markers: {
        default: [],
        type: Array
      }
    },
    methods: {
      setCenter: (position) => {
        this.center = position
      },
      toggleInfoWindow: function(marker, idx) {

        this.infoWindowPos = marker.position;
        this.infoContent = marker.infoText;

        //check if its the same marker that was selected if yes toggle
        if (this.currentMidx == idx) {
          this.infoWinOpen = !this.infoWinOpen;
        }
        //if different marker set infowindow to open and reset current marker index
        else {
          this.infoWinOpen = true;
          this.currentMidx = idx;

        }
      }
    }
  }
</script>