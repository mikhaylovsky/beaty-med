<template>
  <div class="opening-hours">
    <h2 class="d-flex align-items-center">
      Opening Hours
    </h2>

    <ul class="p-0 m-0">
      <li v-for="(day, index) in days" :key="index" v-html="day"></li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      days: []
    }
  },
  created() {
    this.days = [
      'Monday - Thursday <span>8.00 - 19.00</span>',
      'Friday <span>8.00 - 18.30</span>',
      'Saturday <span>9.30 - 17.00</span>',
      'Sunday <span>9.30 - 15.00</span>'
    ]
  }
}
</script>
