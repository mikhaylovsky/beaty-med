<template>
  <div class="subscribe-banner">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">
          <h2>Subscribe to our newsletter</h2>

          <form @submit.prevent="submit" method="post">
            <input v-model="email" type="email" placeholder="E-mail address">
            <p v-if="error" class="error-text">
              {{ error }}
            </p>
            <p v-if="success" class="success-text">
              {{ success }}
            </p>
            <input :disabled="!email.length" class="button gradient-bg" type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      email: '',
      error: '',
      errorState: 0,
      success: ''
    }
  },
  methods: {
    submit() {
      this.error = this.success = ''

      this.$axios.post('https://jsonplaceholder.typicode.com/todos/1', { email: this.email })
        .then((response) => {
          if (response.status === 200) {
            this.success = response.data.message
          } else {
            this.error = response.data.message
          }
        })
        .catch((error) => {
          this.errorState = error.response.status || 0
          this.error = 'Server error, please try again later!'
        })

      setTimeout(() => {
        this.success = this.email = ''
      }, 5000)
    }
  }
}
</script>
