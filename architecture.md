# Architecture Design (HA / DR)

This project follows a **multi-region, fault-tolerant architecture** designed
to withstand infrastructure failures at multiple levels.

## Regional Isolation

Each AWS region contains:
- Independent VPC
- Public and private subnets
- Load balancer
- Auto Scaling Group
- Database layer

This ensures that failure in one region does not impact the other.

## Traffic Management

Amazon Route 53 acts as the global traffic controller.
Health checks determine whether traffic should be routed to the primary or
secondary region.

## Compute Layer

EC2 instances are deployed using Launch Templates and managed by Auto Scaling
Groups, ensuring automatic recovery from instance-level failures.
