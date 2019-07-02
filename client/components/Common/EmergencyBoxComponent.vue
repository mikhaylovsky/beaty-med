<template>
  <div class="emergency-box h-100">
    <h2 class="d-flex align-items-center">
      Emergency
    </h2>

    <div class="call-btn button gradient-bg">
      <a class="d-flex justify-content-center align-items-center" :href="`tel:${phone.replace(/ /g, '')}`">
        <img src="~assets/images/emergency-call.png" alt="phone">
        <span>{{ phone }}</span>
      </a>
    </div>

    <p v-html="text" />
  </div>
</template>

<script>
export default {
  data() {
    return {
      phone: '',
      text: ''
    }
  },
  created() {
    this.phone = '+38 050 111 22 33'
    this.text = 'Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Donec males uada lorem maximus mauris sceler isque, at rutrum nulla.'
  }
}
</script>
