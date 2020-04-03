<template>
  <div class="appointment-box">
    <h2 class="d-flex align-items-center">
      Make an Appointment
    </h2>

    <form class="d-flex flex-wrap justify-content-between" method="post" @submit.prevent="submit">
      <ul v-if="errors.length" class="errors w-100 list-unstyled">
        <li v-for="(error, index) in errors" :key="index">
          {{ error }}
        </li>
      </ul>

      <div v-if="success" class="success w-100">
        <p>{{ success }}</p>
      </div>

      <select v-model="formData.department" class="select-department">
        <option v-for="department in entryData.departments" :key="department.id" :value="department.id" :disabled="department.disabled">
          {{ department.title }}
        </option>
      </select>

      <select v-model="formData.doctor" class="select-doctor">
        <option v-for="doctor in entryData.doctors" :key="doctor.id" :value="doctor.id" :disabled="doctor.disabled">
          {{ doctor.name }}
        </option>
      </select>

      <input v-model="formData.name" type="text" placeholder="Name">

      <input v-model="formData.phone" type="text" placeholder="Phone No">

      <input :disabled="!formData.name || !formData.phone" class="button gradient-bg" type="submit" value="Boom Appoitnment">
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      entryData: {
        departments: [
          {
            id: '',
            title: 'Select a department',
            disabled: true
          }
        ],
        doctors: [
          {
            id: '',
            name: 'Select a doctor',
            disabled: true
          }
        ]
      },
      formData: {
        department: '',
        doctor: '',
        name: null,
        phone: null
      },
      errors: [],
      success: null
    }
  },
  created() {
    this.entryData.departments.push(...[
      {
        id: 1,
        title: 'Cardiology'
      },
      {
        id: 2,
        title: 'Cardiology'
      },
      {
        id: 3,
        title: 'Cardiology'
      }
    ])

    this.entryData.doctors.push(...[
      {
        id: 1,
        name: 'John Doe'
      },
      {
        id: 2,
        name: 'Jane Doe'
      },
      {
        id: 3,
        name: 'Johnie Doe'
      },
      {
        id: 4,
        name: 'Jack Doe'
      }
    ])
  },
  methods: {
    submit(event) {
      this.errors = []

      if (!this.formData.department) {
        this.errors.push('Please select a department!')
      }

      if (!this.formData.doctor) {
        this.errors.push('Please select a doctor!')
      }

      if (!this.formData.name) {
        this.errors.push('Please enter your name!')
      } else if (!this.checkName(this.formData.name)) {
        this.errors.push('Name format is invalid!')
      }

      if (!this.formData.phone) {
        this.errors.push('Please enter your telephone!')
      } else if (!this.checkPhone(this.formData.phone)) {
        this.errors.push('Phone format is invalid!')
      }

      if (!this.errors.length) {
        this.$axios.post('', this.formData)
          .then((response) => {
            if (response.status === 200) {
              this.success = 'Congrats!'

              event.target.reset()
            } else {
              this.errors.push('Smth went wrong!')
            }
          })
          .catch((error) => {
            console.log(error)
            this.errors.push('Smth went wrong!')
          })

        setTimeout(() => {
          this.success = null
        }, 5000)
      }
    },
    checkName(name) {
      const rule = /^[a-zA-ZÀ-ÿa-яА-Я\s-]+$/
      return rule.test(name)
    },
    checkPhone(phone) {
      const rule = /^\+?(\d)+$/
      return rule.test(phone)
    }
  }
}
</script>
